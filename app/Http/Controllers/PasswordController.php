<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ForgotPassword;
use Sentinel;
use Reminder;
use Session;
use DB;
use Mail;

class PasswordController extends Controller
{
    public function getReset($code)
    {
    	if (!$this->validatePasswordResetCode($code)) {
            Session::flash('message', 'Invalid or expired password reset code; please request a new link.');
            return redirect('/');
        }

        return view('forgotpassword.resetpassword')
            ->with('code', $code);
    }

    public function postReset(Request $request,$code)
    {
        $this->validate($request,[
    			'password' => 'required|max:255|confirmed'
		]);
        
        $user = Sentinel::findUserByCredentials(['email' => $request->email]);
        $password = $request->password;
        if ($reminder = Reminder::complete($user, $code,$password))
		{
            // Reminder was successful
            $credentials = [
                'password' => $request->password,
            ];
            $user = Sentinel::update($user, $credentials);
			
			//Login
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            //removing old reminders
            $remember = false;

            Reminder::removeExpired();
            
            if (Sentinel::authenticate($credentials,$remember))
                return redirect('profile')->with('success','Welcome back!');
        }
		else
		{
			// Reminder not found or not completed.
			Session::flash('message', 'Password Reset Unsuccessful');
        	return back()->withInput();
		
		}
    }

    public function getRequest()
    {
    	//return view to enter email to get password reset link
    	return view('forgotpassword.requestpassword');

    }

    public function postRequest(Request $request)
    {
    	$this->validate($request, [
	        'email' => 'required|max:255|exists:users,email',
    	]);

    	// Fetch the user
        $user = Sentinel::findUserByCredentials(['email' => $request->get('email')]);

        // Only send them an email if they have a valid, inactive account
        if ($user) {
            // Generate a new code
            $reminder = Reminder::create($user);

            // Send the email
            $code = $reminder->code;
            Mail::to($user)->send(new ForgotPassword($code));
        }
        return redirect('sign-in')->with('success','An Email has been sent to your Email address'); 

    }

    protected function validatePasswordResetCode($code)
    {
        return DB::table('reminders')
                ->where('code', $code)
                ->where('completed', false)->count() > 0;
    }
}
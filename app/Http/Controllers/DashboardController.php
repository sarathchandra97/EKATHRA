<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class DashboardController extends Controller
{
    public function profile()
    {
    	$user = Sentinel::getUser();
    	return view('dashboards.profile')->with('user',$user);
    }

    public function updateProfile(Request $request)
    {
    	$credentials = [
			'name' => $request->name,
			'mobile' => $request->mobile,
            'accommodation' => $request->accommodation,
		];
        
		$user = Sentinel::check();
		if(Sentinel::update($user, $credentials))
		{
			return redirect('profile')->with('success', 'Your profile has been updated!');
		}
		else 
		{
			$errors = collect();
			$errors->push("Something went wrong");
			return back()->withInput()->with('errors', $errors);
		}
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|max:255|confirmed',
        ]);
        $user = Sentinel::check();
        $email = $user->email;
        $credentials = [
            'email' => $user->email,
            'password' => $request->old_password,
        ];

        if (Sentinel::validateCredentials($user, $credentials)) {
            Sentinel::update($user, ['password' => $request->password]);
            return redirect('profile')->with('success', 'Your password has been updated!');
        }
        else {
            $errors = collect();
            $errors->push("You entered an incorrect password!");
            return back()->withInput()->with('errors', $errors);
        }
    }

    public function events()
    {
    	return view('dashboards.events');
    }

    public function createTeam(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'event' => 'required|max:255',
        ]);
    }	
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Team;
use DB;

class DashboardController extends Controller
{
    public function profile()
    {
    	$user = Sentinel::getUser();
    	return view('dashboards.profile')->with('user',$user);
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|',
            'mobile' => 'required|digits:10',
        ]);
        if($request->accommodation != '')
        {
            $credentials = [
                'name' => $request->name,
                'mobile' => $request->mobile,
                'accommodation' => $request->accommodation,
            ];
        }
        else
        {
            $credentials = [
                'name' => $request->name,
                'mobile' => $request->mobile,
            ];
        }
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
        $email = Sentinel::check()->email;
        $teams = Team::where('member1', '=', $email)
        ->orWhere('member2', '=', $email)
        ->orWhere('member3', '=', $email)
        ->orWhere('member4', '=', $email)
        ->orWhere('member5', '=', $email)
        ->orWhere('member6', '=', $email)
        ->orWhere('member7', '=', $email)
        ->orWhere('member8', '=', $email)->get();
    	return view('dashboards.events')->with('teams',$teams);
    }

    public function createTeam(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|unique:teams,name',
        ]);

        $team = new Team;

        $team->name = $request->name;
        $team->member1 = Sentinel::check()->email;
        $team->count = 1;
        $team->save();

        return redirect('events-registered');
    }	

    public function deleteTeam($team)
    {
        DB::table('teams')->where('name', '=', $team)->delete();
        return redirect('events-registered');
    }
    
    public function leaveTeam($team)
    {
        //remove the user from team.
        
    }

    public function addmember(Request $request)
    {
        $this->validate($request, [
            'team' => 'required',
            'uid' => 'required|max:32|exists:users,hash',
        ]);
        
        $user = DB::table('users')->where('hash', '=', $request->uid)->first();
        $team = DB::table('teams')->where('name', '=', $request->team)->first();
        
        DB::table('teams')->where('name', '=', $team->name)->update(['member'.($team->count + 1) => $user->email,'count' => ($team->count+1)]);
        return redirect('events-registered');
     }   
}

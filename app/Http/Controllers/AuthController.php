<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewUser;
use Sentinel;
use Mail;
use DB;
use Session;

class AuthController extends Controller
{
    public function getLogin()
    {
    	return view('pages.login');
    }

    public function postLogin(Request $request)
    {
    	$credentials = [
			'email' => $request->email,
			'password' => $request->password,
		];

        $remember = false;

		if (Sentinel::authenticate($credentials,$remember))
			return redirect('profile');

		$errors = collect()->push('Email and password do not match!');
        return back()->withInput()->with('errors', $errors);
    }

    public function logout()
    {
        if(Sentinel::check())
        {
            Sentinel::logout(null,true);    
        }
		return redirect('/');
    }

    public function getRegister()
    {
        $colleges = DB::table('colleges')->get();
        $departments = DB::table('departments')->get();
    	return view('pages.register')->with('colleges',$colleges)->with('departments',$departments);
    }

    public function postRegister(Request $request)
    {   
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email',
            'password' => 'required|max:255|confirmed',
            'department' => 'required|max:255',
            'college' => 'required|max:255',
            'mobile' => 'required|digits:10',
        ]);
         
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'hash' => md5($request->email),
            'college' => ($request->college == 'other')?$request->other_college:$request->college,
            'department' => ($request->college == 'other')?$request->other_department:$request->department,
            'accommodation' => $request->accommodation,
        ];

        $user = Sentinel::registerAndActivate($credentials);

        $role = Sentinel::findRoleBySlug('user');
        $user->roles()->attach($role);

        Mail::queue($user)->send(new NewUser());
        
        Sentinel::login($user);
        
        Session::flash('success','Registration successful.Welcome to EKATHRA 2017');

        return redirect('profile');
    }
}

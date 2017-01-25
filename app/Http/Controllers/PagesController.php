<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view('pages.index');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function getContact()
    {
    	return view('pages.contact');
    }

    public function postContact(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'message' => 'required|max:65535',
        ]);
    }

    public function events()
    {
        return view('pages.events');
    }

    public function event($slug)
    {
        return $slug;
    }

    public function workshops()
    {
        return view('pages.workshops');
    }

    public function vivaan2016()
    {
        return view('pages.vivaan2016');
    }
}

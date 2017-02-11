<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;

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

    public function festevents($fest)
    {
        $events = DB::table('items')->where([['fest', '=', $fest],['category', '=', 'event']])->get();
        return view('events.events')->with('events',$events);
    }

    public function event($slug)
    {
        return $slug;
    }

    public function workshops()
    {
        return view('pages.workshops');
    }

    public function culturals()
    {
        $culturals = DB::table('items')->where('category', '=', 'culturals')->get();
        
        return view('pages.culturals')->with('culturals',$culturals);
    } 

    public function sponsors()
    {
        return view('pages.sponsors');
    }
}

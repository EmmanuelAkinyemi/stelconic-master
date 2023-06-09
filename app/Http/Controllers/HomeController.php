<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use \App\Models\Property;
use \App\Models\Blog;
use \App\Models\Team;

use Mail;

class HomeController extends Controller
{
    public function index() {
        $properties = Property::all()->sortByDesc("created_at");
        $blogs = Blog::all()->sortByDesc("created_at");
        $teams = Team::all()->sortByDesc("created_at");
        return view('index', compact('properties', 'blogs', 'teams'));
    }

    public function About() {
        $teams = Team::all()->sortByDesc("created_at");
        return view('about', compact('teams'));
    }

    public function contact()
    {
        return view('contact');
    }
    public function contact_mail_send(Request $request)
    {
        // dd(($request)->all());
        Mail::to('info@stelconic-properties.com')->send(new ContactMail($request));
        return redirect('contact');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\Property;
use \App\Models\Blog;
use \App\Models\Team;


class HomeController extends Controller
{
    public function index() {
        $properties = Property::all()->sortByDesc("created_at");
        $blogs = Blog::all()->sortByDesc("created_at");
        $teams = Team::all()->sortByDesc("created_at");
        return view('index', compact('properties', 'blogs', 'teams'));
    }

    public function contact()
    {
        return view('contact');
    }
    public function sendMail(Request $request)
    {
        dd(($request)->all());
    }
}

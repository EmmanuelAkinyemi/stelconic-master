<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Property;
use \App\Models\Blog;

class HomeController extends Controller
{
    public function index() {
        $properties = Property::all()->sortByDesc("created_at");
        $blogs = Blog::all()->sortByDesc("created_at");
        return view('index', compact('properties'), compact('properties'));
    }
}

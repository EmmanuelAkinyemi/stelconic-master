<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Property;

class PropertyController extends Controller
{
    public function index() {
        $properties = Property::all()->sortByDesc("created_at");
        return view('home', compact('properties'));
    }
    //get and show single property
    public function show(Property $property)
    {
        $properties = Property::all()->sortByDesc("created_at");
        return view('property', compact('properties'));
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request){
        $property = new Property;
        $property->title = $request->title;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->category = $request->category;
        $property->save();
    }
}

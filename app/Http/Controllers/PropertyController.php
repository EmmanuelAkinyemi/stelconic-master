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
    //get and show single listing
    public function show(Property $property)
    {
        return view('listings.show', [
            'property' => $property
        ]);
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

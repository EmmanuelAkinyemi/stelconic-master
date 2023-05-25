<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Property;

class PropertyController extends Controller
{
    public function index() {
        $property = Property::all()->sortByDesc("created_at");
        return view('home', compact('property'));
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

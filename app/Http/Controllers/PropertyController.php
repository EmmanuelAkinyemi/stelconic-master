<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PropertyController extends Controller
{
    //get and show all Properties on the client side
    public function list()
    {
        return view('properties.list', [
            'properties' => Property::latest()->filter(request(['category', 'search']))->paginate(4)
        ]);
    }

    //get and show single Property on the client side
    public function show(Property $property)
    {
        return view('properties.details', [
            'property' => $property
        ]);
    }
    //********************************************//

    //show the properties in a tabular format in the admin dashboard
    public function properties()
    {
        return view('admin.viewProperties', [
            'properties' => Property::all()
        ]);
    }
    //show create form for the property on the admin section
    public function create()
    {
        return view('admin.create-property');
    }

    //creates the property and stores in the database
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'location' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('images')) {
            $formFields['images'] = $request->file('images')->store('images', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Property::create($formFields);

        return redirect('/viewProperties')->with('message', 'Property created successfully!');
    }

    public function edit(Property $property)
    {
        return view('admin.edit-property', ['property' => $property]);
    }

    public function update(Request $request, Property $Property)
    {

        if ($Property->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'location' => 'required',
            'category' => 'required',
            'status' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('images')) {
            $formFields['images'] = $request->file('images')->store('images', 'public');
        }

        $Property->update($formFields);

        return redirect('/viewProperties')->with('message', 'Property updated successfully!');
    }

    public function destroy(Property $property)
    {
        if ($property->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $property->delete();
        return redirect('/viewProperties')->with('message', 'Property deleted successfully!');
    }

    public function manage()
    {
        return view('admin.viewProperties', ['properties' => auth()->user()->properties()->get()]);
    }
}

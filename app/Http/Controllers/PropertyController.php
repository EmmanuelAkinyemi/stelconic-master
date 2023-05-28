<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PropertyController extends Controller
{
    //get and show all Propertys
    public function view()
    {
        return view('Properties.view', [
            'Properties' => Property::latest()->filter(request(['category', 'search']))->paginate(4)
        ]);
    }

    //show the properties in a tabular format in the admin dashboard
    public function properties(){
        return view('admin.viewProperties', [
            'properties' => Property::all()
        ]);
    }

    public function showProperties(){
        return view('');
    }
    //get and show single Property
    public function show(Property $Property)
    {
        return view('Properties.show', [
            'Property' => $Property
        ]);
    }

    //show create form
    public function create()
    {
        return view('admin.create-property');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'price' => ['required'],
            'location' => 'required',
            'category' => 'required',
            'email' => ['required', 'email'],
            'description' => 'required'
        ]);

        if($request->hasFile('logo'))
        {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Property::create($formFields);

        return redirect('/')->with('message', 'Property created successfully!');
    }

    public function edit(Property $Property)
    {
        return view('Propertys.edit', ['Property' => $Property]);
    }

    public function update(Request $request, Property $Property)
    {

        if($Property->user_id !=auth()->id())
        {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo'))
        {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $Property->update($formFields);

        return back()->with('message', 'Property updated successfully!');
    }

    public function destroy(Property $property)
    {
        if($property->user_id !=auth()->id())
        {
            abort(403, 'Unauthorized Action');
        }
        $property->delete();
        return redirect('/')->with('message', 'Property deleted successfully!');
    }

    public function manage()
    {
        return view('Propertys.manage', ['listings' => auth()->user()->properties()->get()]);
    }
}

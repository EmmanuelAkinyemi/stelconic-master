<?php

namespace App\Http\Controllers;
use App\Models\Team;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class TeamController extends Controller
{
    public function Team()
    {
        return view('admin.team',
            ['teams' => auth()->user()->teams()->get()]);
    }

    public function create()
    {
        return view('admin.create-team');
    }

    public function store(Request $request)
  {
      $formFields = $request->validate([
          'name' => 'required',
          'role' => 'required',
          'email' => ['required', 'email', Rule::unique('teams', 'email')],
          'facebook' => 'required',
          'twitter' => 'required',
      ]);

      if ($request->hasFile('image')) {
          $formFields['image'] = $request->file('image')->store('image', 'public');
      }

      $formFields['user_id'] = auth()->id();

      Team::create($formFields);

      return redirect('/team')->with('message', 'Team member listed successfully!');
  }
}

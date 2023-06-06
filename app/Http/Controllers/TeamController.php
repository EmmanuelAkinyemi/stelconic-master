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
        return view(
            'admin.team',
            ['teams' => auth()->user()->teams()->get()]
        );
    }

    public function create()
    {
        return view('admin.create-team');
    }

    public function storeTeam(Request $request)
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

        return redirect('/team')->with('success', 'Team member listed successfully !');
    }

    public function editTeam(Team $team)
    {
        return view('admin.edit-team', ['team' => $team]);
    }

    public function update(Request $request, Team $team)
    {

        if ($team->user_id != auth()->id())
        {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => ['required'],
            'facebook' => 'required',
            'twitter' => 'required',
        ]);

        if ($request->hasFile('image'))
        {
            $formFields['image'] = $request->file('image')->store('image', 'public');
        }

        $team->update($formFields);

        return redirect('/team')->with('info', 'Team Member Successfully Updated !');
    }

    public function destroyTeam(Team $team)
    {
        if ($team->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $team->delete();
        return redirect('/team')->with('warning', 'Team Member Deleted Successfully !');
    }
}

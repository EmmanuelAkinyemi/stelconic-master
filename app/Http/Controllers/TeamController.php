<?php

namespace App\Http\Controllers;
use App\Models\Team;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function Team()
    {
        return view('admin.team', [
            'teams' => Team::latest()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cricketer;
use App\Models\Team;

class TeamController extends Controller
{
    public function create()
    {
        $cricketers = Cricketer::all();

        return view('team.create', compact('cricketers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'team_name' => 'required|max:255',
            'cricketers' => 'required|array|min:11|max:11',
            'cricketers.*' => 'required|exists:cricketers,id',
        ]);

        $team = new Team();
        $team->name = $request->team_name;
        $team->save();

        $team->cricketers()->attach($request->cricketers);

        return redirect()->route('team.create')->with('success', 'Team created successfully!');
    }
}

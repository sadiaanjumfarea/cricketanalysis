<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Cricketer;

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
            'team_name' => 'required|string|max:255',
            'user_id' => 'required|integer', 
            'cricketers' => 'required|array|min:5|max:5', 
        ]);

        $team = Team::create([
            'name' => $request->input('team_name'),
            'user_id' => $request->input('user_id'),
        ]);

        $selectedCricketers = $request->input('cricketers');
        $team->cricketers()->sync($selectedCricketers);
        return redirect()->route('team.list')->with('success', 'Team created successfully!');
    }
}

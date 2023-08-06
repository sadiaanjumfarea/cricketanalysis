<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Cricketer;

class TeamController extends Controller
{
    // Other methods in the controller...

    // Method to handle team creation form submission
    // Method to handle team creation form submission
public function store(Request $request)
{
    $request->validate([
        'team_name' => 'required|string|max:255',
        'cricketers' => 'required|array|min:5|max:5', 
        'user_id' => 'required|integer', e
    ]);

    $team = Team::create([
        'name' => $request->input('team_name'),
        'user_id' => $request->input('user_id'), 
    ]);

    $selectedCricketers = $request->input('cricketers');
    $cricketersExist = Cricketer::whereIn('id', $selectedCricketers)->count();

    if ($cricketersExist === count($selectedCricketers)) {
        $team->cricketers()->sync($selectedCricketers);

        return redirect()->route('team.list')->with('success', 'Team created successfully!');
    } else {
        return back()->withErrors(['cricketers' => 'Invalid cricketer selected'])->withInput();
    }
}

    public function index()
{
    $teams = Team::with('user', 'cricketers')->get();

    return view('teams.index', compact('teams'));
}

}

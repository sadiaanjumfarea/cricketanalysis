<?php
namespace App\Http\Controllers;

use App\Models\Cricketer;
use Illuminate\Http\Request;

class CricketerController extends Controller{
    public function handle($request, Closure $next)
{
    if (!auth()->user()->isAdmin()) {
        return redirect()->route('home'); 
    }

    return $next($request);
}

    public function destroy(Request $request)
    {
        $cricketerId = $request->input('cricketer_id');

        $cricketer = Cricketer::find($cricketerId);

        if ($cricketer) {
            $cricketer->delete();

            return redirect()->route('admin.dashboard')->with('success', 'Cricketer deleted successfully!');
        } else {
            return redirect()->route('admin.dashboard')->with('error', 'Cricketer not found.');
        }
    }
    
    public function update(Request $request, Cricketer $cricketer)
    {
        $cricketer->update($request->all());

        return redirect()->route('cricketers.index')->with('success', 'Cricketer updated successfully!');
    }
    public function edit()
{
    return view('admin.edit');
}

   
public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'innings' => 'nullable|integer|min:0',
        'run_rate' => 'nullable|numeric|min:0',
        'matches_played' => 'nullable|integer|min:0',
        'other_details' => 'nullable|string',
        'gender' => 'required|in:male,female',
    ]);

    Cricketer::create($data);

    return redirect()->route('admin.dashboard')->with('success', 'Cricketer added successfully!');
}



}


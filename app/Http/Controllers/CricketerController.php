<?php
namespace App\Http\Controllers;

use App\Models\Cricketer;
use Illuminate\Http\Request;

class CricketerController extends Controller{
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
    public function edit(Cricketer $cricketer)
    {
        return view('cricketers.edit', compact('cricketer'));
    }
    public function update(Request $request, Cricketer $cricketer)
    {
        $cricketer->update($request->all());

        return redirect()->route('cricketers.index')->with('success', 'Cricketer updated successfully!');
    }

}


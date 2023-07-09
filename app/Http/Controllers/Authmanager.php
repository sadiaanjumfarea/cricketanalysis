<?php
namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Cricketer;
class Authmanager extends Controller
{
    public function listTeams()
    {
        $teams = Team::where('user_id', '!=', auth()->id())->with('user', 'cricketers')->get();
        return view('team.list', compact('teams'));
    }
    
    public function login()
    {
        return view('login');
    }
    public function index()
{
    return view('index');
}
    public function dashboard()
    {
        $cricketers = Cricketer::all();
        return view('dashboard', compact('cricketers'));
    }

    public function loginpost(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('dashboard');
    }

    return redirect()->route('login')->with("error", "Login details are incorrect!");
}


    public function register()
    {
        return view('register');
    }
    public function registerpost(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password); 
    $user->save();

    return redirect()->route('home')->with("success", "Registration successful!");
}
    
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    
    public function createTeam()
    {
        $cricketers = Cricketer::all();
        return view('team.create', compact('cricketers'));
    }

    public function storeTeam(Request $request)
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function adminDashboard()
{
    $cricketers = Cricketer::all();

    return view('admin.dashboard', ['cricketers' => $cricketers]);
}
}

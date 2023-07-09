<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authmanager;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [Authmanager::class, 'login'])->name('login');
Route::post('/login', [Authmanager::class, 'loginpost'])->name('login');
Route::get('/register', [Authmanager::class, 'register'])->name('register');
Route::post('/register', [Authmanager::class, 'registerpost'])->name('register');
Route::get('/dashboard', [Authmanager::class, 'dashboard'])->name('dashboard');
Route::post('/dashboard', [Authmanager::class, 'dashboardpost'])->name('dashboard');
Route::get('/logout', [Authmanager::class, 'logout'])->name('logout');

Route::get('/team', [Authmanager::class, 'createTeam'])->name('team.create');
Route::post('/team', [Authmanager::class, 'storeTeam'])->name('team.store');
Route::get('/dashboard/team/create', [Authmanager::class, 'createTeam'])->name('team.create');
Route::get('/team/list', [Authmanager::class, 'listTeams'])->name('team.list');

Route::get('/', [Authmanager::class, 'index'])->name('home');

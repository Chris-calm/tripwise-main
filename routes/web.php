<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ─────────────────────────────────────────────────────────────
// Super Admin Secret Login Route (Option A — URL-only access)
// Access URL: /login
// NOTE: Authentication logic will be wired up per team's system.
// ─────────────────────────────────────────────────────────────
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Placeholder POST route — teams will replace this with their own auth logic
Route::post('/login', function () {
    // TODO: Wire up your team's authentication logic here.
    // Example using Laravel Auth:
    //   $credentials = request()->validate(['email' => 'required|email', 'password' => 'required']);
    //   if (Auth::attempt($credentials, request()->boolean('remember'))) {
    //       return redirect()->intended('/dashboard');
    //   }
    //   return back()->withErrors(['email' => 'Invalid credentials.']);
    return back();
})->name('login.post');

// Dashboard Route — protect with your team's middleware when ready
Route::get('/dashboard', function () {
    // TODO: Add auth middleware once your login system is set up.
    // ->middleware('auth')
    return view('dashboard');
})->name('dashboard');

// Passenger Booking App Simulator (Team 10)
Route::get('/passenger-booking-app', function () {
    return view('passenger-app');
})->name('passenger.booking-app');

// Team 8 Facilities & Admin Sub-Modules and Integration Matrix Overview
Route::get('/facilities-admin', function () {
    return view('facilities.dashboard');
})->name('facilities.dashboard');



// Logout Route — implement when auth is set up
Route::post('/logout', function () {
    // TODO: Auth::logout(); session()->invalidate(); session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');

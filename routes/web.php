<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AparManagement;   // Import komponen AparManagement
use App\Livewire\P3kManagement;    // Import komponen P3kManagement
use App\Livewire\HydrantManagement; // Import komponen HydrantManagement

Route::get('/login', function () {
    return view('auth.login'); // Assuming you have a login Blade view at resources/views/auth/login.blade.php
})->name('login');

// Routes for Management Pages
Route::get('/apar-management', AparManagement::class)->name('apar.management');
Route::get('/p3k-management', P3kManagement::class)->name('p3k.management');
Route::get('/hydrant-management', HydrantManagement::class)->name('hydrant.management');


// You might want a root route that redirects to login or dashboard
Route::get('/', function () {
    return redirect()->route('login'); // Redirect to login by default
});

// Example of a protected route (requires authentication)
// You would typically wrap your dashboard and management routes in an 'auth' middleware
/*
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', SafetyDashboard::class)->name('dashboard');
    Route::get('/apar-management', AparManagement::class)->name('apar.management');
    Route::get('/p3k-management', P3kManagement::class)->name('p3k.management');
    Route::get('/hydrant-management', HydrantManagement::class)->name('hydrant.management');
});
*/
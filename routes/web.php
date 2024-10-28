<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::get('/test-idin', function () {

    $attendances = DB::connection('idin')->table("HIKCENTRAL")->get();
    dd($attendances);
});
require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/guests', [GuestController::class, 'index']);
Route::get('/guests', [GuestController::class, 'index']);

Route::get('/invite', [GuestController::class, 'invite']);

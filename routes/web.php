<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use Illuminate\HTTP\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class)
    ->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/line', function () {
    return view('line');
});

Route::resource('students', \App\Http\Controllers\StudentController::class);
Route::resource('grades', \App\Http\Controllers\GradeController::class);
Route::resource('passrates', \App\Http\Controllers\PassRateController::class);
Route::resource('ratetrends', \App\Http\Controllers\RateTrendsController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

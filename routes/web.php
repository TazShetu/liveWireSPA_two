<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    Dashboard,
    Auth\Login,
    Auth\Register,
    Dashboard2,
};
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['guest'])->group(function () {
    // if logged in, by default 'guest middleware' will redirect to ../home url
    // change this in app/providers/RouteServiceProvider.php
    // public const HOME = '/dashboard';

    Route::get('/', function () {
        return view('welcome');
    })->name('init');

    Route::view('/login', 'Auth.login')->name('login');
    Route::view('/register', 'Auth.register')->name('register');

});


Route::middleware(['auth'])->group(function () {
    // if not logged in, by default 'auth middleware' will redirect to 'login' route

    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/dashboard2', Dashboard2::class)->name('dashboard2');

    Route::get('/logout', function () {
        Auth::logout();
        session()->flash('success', 'You have successfully Logged out.');
        return redirect()->route('login');
    })->name('logout');

});

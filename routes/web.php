<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('welcome');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/register', 'auth.register')->name('register');
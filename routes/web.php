<?php

use Illuminate\Support\Facades\Route;

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

// Homepage route
Route::view('/', 'index')->name('home');

// About page route
Route::view('/about', 'about')->name('about');

// Contact page route
Route::view('/contact', 'contact')->name('contact');
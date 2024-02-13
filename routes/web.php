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

Route::get('/', function () {
    $navLinks = config('nav_links');
    $footerArr = config('footer_arr');
    return view('home', compact('footerArr', 'navLinks'));
})->name('home');

Route::get('/comics', function () {
    $navLinks = config('nav_links');
    $blueBar = config('blue_bar');
    $footerArr = config('footer_arr');
    $comics = config('comics');
    return view('comics', compact('footerArr', 'blueBar', 'navLinks', 'comics'));
})->name('comics');

Route::get('/movies', function () {
    $navLinks = config('nav_links');
    $footerArr = config('footer_arr');
    return view('movies', compact('footerArr','navLinks'));
})->name('movies');

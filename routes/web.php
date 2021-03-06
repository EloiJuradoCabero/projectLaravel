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

Route::view('/', 'home')->name('home');
Route::view('login','login')->name('login');
Route::view('register','register')->name('register');
Route::view('who','who')->name('who');
Route::view('where','where')->name('where');
Route::view('clubs','clubs')->name('clubs');
Route::view('contact','contact')->name('contact');
Route::view('luz','luz')->name('luz');
Route::view('calendar','calendar')->name('calendar');
Route::view('key','key')->name('key');




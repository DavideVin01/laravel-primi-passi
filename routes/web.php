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
    $data = [
        'word' => 'Hello World',
    ];

    return view('home', $data);
})->name('home');

Route::get('/sitiweb', function () {
    return view('sitiweb');
})->name('sitiweb');

Route::get('/chi-sono', function () {
    return view('chi-sono');
})->name('chi-sono');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('/altro', function () {
    return view('altro');
})->name('altro');

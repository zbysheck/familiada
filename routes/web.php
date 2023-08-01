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
    return view('screen');
});

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/admin-files', function () {
    return view('admin', [
        'value1' => "kopiowanie",
        'value2' => "usuwanie",
        'value3' => "wyświetlanie",
        'value4' => "przenoszenie",
        'value5' => "tworzenie",
        'value6' => "edycja",
        'points1' => 34,
        'points2' => 28,
        'points3' => 18,
        'points4' => 11,
        'points5' => 9,
        'points6' => 1,
    ]);
});

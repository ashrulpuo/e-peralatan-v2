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
    return view('index');
});

Route::get('permohonan', function () {
    return view('permohonan');
});

Route::get('semakan', function () {
    return view('semakan');
});

Route::get('semakan-permohonan', function () {
    return view('semakan-permohonan');
});

Route::get('cetak-permohonan', function () {
    return view('cetak-permohonan');
});



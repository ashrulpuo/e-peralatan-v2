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
Auth::routes();

Route::get('/', function () {
	return redirect('home');
});

Route::get('permohonan', function () {
	return view('permohonan');
});

Route::get('semakan', function () {
	return view('semakan');
})->name('semakan');

Route::get('semakan-permohonan', function () {
	return view('semakan-permohonan');
});

Route::get('cetak-permohonan', function () {
	return view('cetak-permohonan');
});

Route::post('permohonan', 'PermohonanController@store')->name('permohonan.store');
Route::post('search', 'PermohonanController@search')->name('semakan.search');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('home', 'HomeController');
	Route::resource('senarai', 'SenaraiPermohonanController');
	Route::get('reject/{id}', 'HomeController@reject')->name('home.reject');
	Route::get('change/{id}', 'HomeController@change')->name('home.change');
	Route::get('approve/{id}', 'HomeController@approve')->name('approve');
});

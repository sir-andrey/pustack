<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Anggota
Route::get('/anggota/index', 'AnggotaController@index')->name('anggota.index');

Route::get('/anggota/create', 'AnggotaController@create')->name('anggota.create');

Route::post('/anggota/store', 'AnggotaController@store')->name('anggota.store');

Route::post('/anggota/update', 'AnggotaController@update')->name('anggota.update');

Route::get('/anggota/destroy/{id}', 'AnggotaController@destroy')->name('anggota.destroy');

Route::get('/anggota/print', 'AnggotaController@print')->name('anggota.print');

//Buku
Route::get('/buku/index', 'BukuController@index')->name('buku.index');

Route::get('/buku/create', 'BukuController@create')->name('buku.create');

Route::post('/buku/store', 'BukuController@store')->name('buku.store');

Route::get('/buku/edit/{id}', 'BukuController@edit')->name('buku.edit');

Route::post('/buku/update', 'BukuController@update')->name('buku.update');

Route::get('/buku/destroy/{id}', 'BukuController@destroy')->name('buku.destroy');

Route::get('/buku/print', 'BukuController@print')->name('buku.print');

//Petugas
Route::get('/petugas/index', 'PetugasController@index')->name('petugas.index');

Route::get('/petugas/create', 'PetugasController@create')->name('petugas.create');

Route::post('/petugas/store', 'PetugasController@store')->name('petugas.store');

Route::get('/petugas/edit/{id}', 'PetugasController@edit')->name('petugas.edit');

Route::post('/petugas/update', 'PetugasController@update')->name('petugas.update');

Route::get('/petugas/destroy/{id}', 'PetugasController@destroy')->name('petugas.destroy');

Route::get('/petugas/print', 'PetugasController@print')->name('petugas.print');


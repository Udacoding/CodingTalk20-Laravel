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
    return view('master');
});

Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');
Route::get('/tambah', 'MahasiswaController@tambah');
Route::post('/create', 'MahasiswaController@create');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::post('/mahasiswa/update/{id}', 'MahasiswaController@update');
Route::get('/mahasiswa/{id}/delete', 'MahasiswaController@delete');

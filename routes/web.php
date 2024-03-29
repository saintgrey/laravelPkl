<?php

use Illuminate\Support\Facades\Auth; 
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

Route::get('/admin', 'adminDashboardController@index')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pindah/{id}', 'adminDashboardController@pindah')->name('pindah.edit');

Route::post('/pindah/{id}', 'adminDashboardController@ubah');

Route::delete('/delete/{id}', 'adminDashboardController@destroy');


Route::get('/list', 'tambahDataController@list');

Route::get('/tambahData','tambahDataController@index');
//tambah Data
Route::get('/tambahBaru', 'tambahDataController@tambahBaru')
    ->name('tambahBaru.dashboard');
Route::get('/tambahBaru/create', 'tambahDataController@Create')
    ->name('tambahBaru.Create');
Route::post('/tambahBaru/store', 'tambahDataController@store')
    ->name('tambahBaru.store');
Route::get('/pindahTambah', 'tambahDataController@pindah');
Route::delete('/tambahBaru/delete/{Sapii}', 'tambahDataController@delete')
    ->name('tambahBaru.delete');
Route::get('/tambahBaru/edit/{id}','tambahDataController@edit')
    ->name('tambahBaru.edit');
Route::post('tambahBaru/update/{sapi}','tambahDataController@update')
    ->name('tambah.update');



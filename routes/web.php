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
use App\Anggota;
Route::get('/', function () {
    return view('welcome');
});
Route::get('anggota',function ()
{
	return Anggota::all();
});
Route::get('anggota/id',function ($id)
{
	return Anggota::find($id);
});

Route::get('anggota','Anggota_Controler@index')
->name('anggota.index');

//Route::resource('anggota','Anggota_Controller');
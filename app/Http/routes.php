<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::resource('akun', 'akun\\akunController');
	Route::resource('penjualan', 'penjualan\\penjualanController');
	Route::resource('supplaier', 'supplaier\\supplaierController');
	Route::resource('barang', 'barang\\barangController');
	Route::resource('pembelian', 'pembelian\\pembelianController');
	Route::resource('jurnalumum', 'jurnalumum\\jurnalumumController');
	Route::resource('kartustok', 'kartustok\\kartustokController');
	Route::resource('jurnalpembelian', 'jurnalpembelian\\jurnalpembelianController');
	Route::resource('jurnalpenjualan', 'jurnalpenjualan\\jurnalpenjualanController');
	Route::resource('pengeluarankas', 'pengeluarankas\\pengeluarankasController');
	Route::resource('penerimaankas', 'penerimaankas\\penerimaankasController');
	Route::resource('nonota', 'nonota\\nonotaController');
	Route::resource('user', 'user\\userController');
	Route::resource('laporanpenjualan', 'laporanpenjualan\\laporanpenjualanController');
	Route::post('laporanstok', 'laporanstok\\laporanstokController@store');
	Route::get('laporanstok', 'laporanstok\\laporanstokController@index');
	Route::resource('laporanpembelian', 'laporanpembelian\\laporanpembelianController');
});

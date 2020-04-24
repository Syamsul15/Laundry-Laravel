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


Route::get('/', 'AuthController@login')->name('login');

Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::get('/dashboard','DashboardController@index');

Route::group(['middleware' => ['auth','checkRole:admin']], function () {

	//outlet
	Route::get('/daftar-outlet', 'OutletController@index');
	Route::get('/daftar-outlet/tambah', 'OutletController@create');
	Route::post('/daftar-outlet/create', 'OutletController@store');
	Route::get('/daftar-outlet/{id}/edit', 'OutletController@edit');
	Route::post('/daftar-outlet/{id}/update', 'OutletController@update');
	Route::get('/daftar-outlet/{id}/delete', 'OutletController@delete');

	//paket
	Route::get('/daftar-paket', 'PaketController@index_admin');
	Route::get('/daftar-paket/tambah', 'PaketController@create');
	Route::post('/daftar-paket/create', 'PaketController@store');
	Route::get('/daftar-paket/{id}/edit', 'PaketController@edit');
	Route::post('/daftar-paket/{id}/update', 'PaketController@update');
	Route::get('/daftar-paket/{id}/delete', 'PaketController@delete');

	//kasir
	Route::get('/daftar-kasir', 'UserController@index');
	Route::get('/daftar-kasir/tambah', 'UserController@create');
	Route::post('/daftar-kasir/create', 'UserController@store');
	Route::get('/daftar-kasir/{id}/edit', 'UserController@edit');
	Route::post('/daftar-kasir/{id}/update', 'UserController@update');
	Route::get('/daftar-kasir/{id}/delete', 'UserController@delete');

	//owner
	Route::get('/daftar-owner', 'OwnerController@index');
	Route::get('/daftar-owner/tambah', 'OwnerController@create');
	Route::post('/daftar-owner/create', 'OwnerController@store');
	Route::get('/daftar-owner/{id}/edit', 'OwnerController@edit');
	Route::post('/daftar-owner/{id}/update', 'OwnerController@update');
	Route::get('/daftar-owner/{id}/delete', 'OwnerController@delete');
});

Route::group(['middleware' => ['auth','checkRole:admin,kasir']], function () {

	//member
	Route::get('/registrasi-member', 'MemberController@index');
	Route::get('/registrasi-member/tambah', 'MemberController@create');
	Route::post('/registrasi-member/create', 'MemberController@store');
	Route::get('/registrasi-member/{id}/edit', 'MemberController@edit');
	Route::post('/registrasi-member/{id}/update', 'MemberController@update');
	Route::get('/registrasi-member/{id}/delete', 'MemberController@delete');
});

Route::group(['middleware' => ['auth','checkRole:admin,kasir,owner']], function () {
	Route::get('/pilih-paket', 'PaketController@index');

	//keranjang
	Route::get('/keranjang', 'KeranjangController@index');
	Route::post('/postkeranjang', 'KeranjangController@store');
	Route::get('/keranjang/{id}/edit', 'KeranjangController@edit');
	Route::post('/keranjang/{id}/update', 'KeranjangController@update');
	Route::get('/keranjang/{id}/delete', 'KeranjangController@delete');

	//transaksi
	Route::get('/transaksi', 'TransaksiController@index');
	Route::post('/posttransaksi', 'TransaksiController@store');
	Route::post('/transaksi/tglbayar/{id}', 'TransaksiController@tglbayar');
	Route::post('/transaksi/biaya_tambahan/{id}', 'TransaksiController@biaya_tambahan');
	Route::post('/transaksi/diskon/{id}', 'TransaksiController@diskon');
	Route::post('/transaksi/pajak/{id}', 'TransaksiController@pajak');
	Route::post('/konfirmasi/proses/{id}', 'TransaksiController@proses');
	Route::post('/konfirmasi/selesai/{id}', 'TransaksiController@selesai');
	Route::post('/konfirmasi/diambil/{id}', 'TransaksiController@diambil');

	//generate laporan
	Route::get('/generatepdf', 'TransaksiController@generatepdf');

	Route::get('/transaksiadmin', 'TransaksiController@indexadmin');
	Route::get('/transaksiowner', 'TransaksiController@indexowner');

});
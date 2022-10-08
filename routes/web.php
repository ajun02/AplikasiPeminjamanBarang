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
    return view('auth.login1');
});

//login
Route::post('/login','LoginController@login');
Route::post('/postlogin','LoginController@postlogin');
Route::get('/logout','LoginController@logout');
Route::get('/formregister','LoginController@create');
Route::post('/registerstore','LoginController@store');
Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//route peminjaman
Route::get('/peminjaman', 'PeminjamanController@index');
Route::get('/peminjaman/create', 'PeminjamanController@create');
Route::post('/peminjaman/store','PeminjamanController@store');
Route::get('/peminjaman/edit/{id}', 'PeminjamanController@edit');
Route::put('/peminjaman/update/{id}', 'PeminjamanController@update');
Route::get('/peminjaman/hapus/{id}', 'PeminjamanController@destroy');
Route::get('/peminjaman/detail/{id}', 'PeminjamanController@show');

//route barang
Route::get('/barang', 'BarangController@index');
Route::get('/barang/create', 'BarangController@create');
Route::post('/barang/store','BarangController@store');
Route::get('/barang/edit/{id}', 'BarangController@edit');
Route::put('/barang/update/{id}', 'BarangController@update');
Route::get('/barang/hapus/{id}', 'BarangController@destroy');
Route::get('/barang/detail/{id}', 'BarangController@show');

//route users
Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::post('/users/store','UsersController@store');
Route::get('/users/edit/{id}', 'UsersController@edit');
Route::put('/users/update/{id}', 'UsersController@update');
Route::get('/users/hapus/{id}', 'UsersController@destroy');
Route::get('/users/detail/{id}', 'UsersController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

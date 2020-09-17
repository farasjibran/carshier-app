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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Multi User
Route::group(['middleware' => 'CheckRole:admin'], function () {
    // Route Admin
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboardadmin');
    Route::get('/userview', 'AdminController@userview')->name('userview');
    Route::get('/menuview', 'AdminController@menuview')->name('menuview');

    // Crud Employe
    Route::post('/register', 'AdminController@registerEmploye')->name('registeremploye');
    Route::post('/update/{id}', 'AdminController@editEmploye')->name('update');
    Route::get('/update/form/{id}', 'AdminController@showModalUpdate');
    Route::get('/delete/{id}', 'AdminController@deleteEmploye');

    // Crud Barang
    Route::post('/addfood', 'AdminController@addFood')->name('addfood');
});

Route::group(['middleware' => 'CheckRole:owner'], function () {
    // Route Owner
    Route::get('/dashboardowner', 'OwnerController@dashboard')->name('dashboardowner');
});

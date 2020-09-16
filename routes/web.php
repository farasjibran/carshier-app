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

// Admin Route
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboardadmin');
Route::get('/userview', 'AdminController@userview')->name('userview');

// Admin Owner
Route::get('/dashboardowner', 'OwnerController@dashboard')->name('dashboardowner');

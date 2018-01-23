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
Route::get('/','Adminauth\AuthController@showLoginForm');
Route::post('/login','Adminauth\AuthController@login');

Route::group(['middleware' => ['admin']], function() {
    Route::get('/dashboard','Admin\AdminController@dashboard');
    Route::get('/logout','Adminauth\AuthController@logout');
});
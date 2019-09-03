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
Route::get('reg','task@reg');
Route::post('doreg','task@doreg');
Route::get('login','task@login');
Route::post('dologin','task@dologin');
Route::post('show','task@show');
Route::get('/', function () {
    return view('welcome');
});

<?php

use Illuminate\Support\Facades\Route;

//Admin
Route::get('/dashboard','App\Http\Controllers\AdminController@index');
//QL Don vi
Route::get('/adddv','App\Http\Controllers\AdminController@add_dv');
//QL Nguoi dung
Route::get('/themnguoidung','App\Http\Controllers\AdminController@add_user');
Route::get('/qlnguoidung','App\Http\Controllers\AdminController@list_user');

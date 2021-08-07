<?php

use Illuminate\Support\Facades\Route;

//Home
Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/dangki','App\Http\Controllers\HomeController@dangki');

//Admin
Route::get('/dashboard', 'App\Http\Controllers\AdminController@index');

//QL Don vi
Route::get('/them-dv', 'App\Http\Controllers\AdminController@add_dv');
Route::post('/luu-dv', 'App\Http\Controllers\AdminController@save_dv');
Route::get('/quanly-dv', 'App\Http\Controllers\AdminController@list_dv');
Route::get('/sua-dv/{ma_dv}', 'App\Http\Controllers\AdminController@sua_dv');
Route::post('/capnhat-dv/{ma_dv}', 'App\Http\Controllers\AdminController@capnhat_dv');
Route::get('/xoa-dv/{ma_dv}', 'App\Http\Controllers\AdminController@xoa_dv');

//QL Nguoi dung
Route::get('/themnguoidung', 'App\Http\Controllers\AdminController@add_user');
Route::get('/qlnguoidung', 'App\Http\Controllers\AdminController@list_user');
Route::get('/sua-nguoidung/{ma_cb}', 'App\Http\Controllers\AdminController@edit_user');
Route::post('/capnhat-nguoidung/{id}', 'App\Http\Controllers\AdminController@capnhat_nguoidung');
Route::get('/xoa-nguoidung/{id}', 'App\Http\Controllers\AdminController@xoa_nguoidung');

//Nguoi dung
Route::post('/dangki', 'App\Http\Controllers\UserController@dangki');
Route::get('/nguoidung', 'App\Http\Controllers\UserController@nguoidung');
Route::post('/kiemtra-dn', 'App\Http\Controllers\UserController@kiemtra_dn');
Route::get('/baocao', 'App\Http\Controllers\UserController@baocao');
Route::get('/alert', 'App\Http\Controllers\UserController@alert');
Route::post('/luu-baocao', 'App\Http\Controllers\UserController@luu_baocao');

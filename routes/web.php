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
Route::group(['middleware' => 'revalidate'], function () {
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
Route::get('/', 'AdminController@index');
Route::get('/coach', 'AdminController@coach');
Route::get('/referral', 'AdminController@referral');
Route::get('/transactions', 'AdminController@transactions');
Route::get('/subscription', 'AdminController@subscription');
Route::get('/feedback', 'AdminController@feedback');
Route::get('/report', 'AdminController@report');
Route::get('/privacy_policy', 'AdminController@privacy_policy');
Route::get('/account_settings', 'AdminController@account_settings');
Route::get('/inbox', 'AdminController@inbox');
Route::get('/notifications', 'AdminController@notifications');
Route::get('/create_notifications', 'AdminController@create_notifications');
Route::get('/user_detail', 'AdminController@user_detail');
});
});
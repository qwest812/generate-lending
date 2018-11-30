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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('/', 'BaseController@index');
Route::get('admin/home', 'AdminController@index')->name('home');
Route::get('/admin/add-lending', 'AdminController@addLending')->middleware('auth');
Route::get('/admin/all-lendings', 'AdminController@allLending')->middleware('auth');
Route::get('/admin/edit-lending/{id}', 'AdminController@editLending')->middleware('auth');
Route::get('/admin/edit-lending/{id}', 'AdminController@editLending')->middleware('auth');
Route::get('/admin/delete-lending/{id}', 'AdminController@deleteLending')->middleware('auth');
Route::get('/admin/lending/comments/{id}', 'AdminController@categoriesLending')->middleware('auth');
Route::get('/admin/lending/add-comment/{id}', 'AdminController@addCommentLending')->middleware('auth');
Route::get('/admin/delete-comment/{id}/{comment_id}', 'AdminController@deleteComment')->middleware('auth');
Route::get('/admin/edit-comment/{id}', 'AdminController@editComment')->middleware('auth');
Route::post('/admin/save-lending', 'AdminController@saveLending')->middleware('auth');
Route::post('/admin/save-comment/{id}', 'AdminController@saveComment')->middleware('auth');
Route::post('/admin/update-lending/{id}', 'AdminController@updateLending')->middleware('auth');


Route::get('admin/upload','AdminController@upload')->name('upload')->middleware('auth');
Route::post('admin/upload','AdminController@upload')->middleware('auth');

Route::post('create-order','BaseController@createOrder');
Route::get('create-order','BaseController@createOrder');

//
Route::get('/{id}','BaseController@lending');
//Route::get('/', 'BaseController@index');
//Route::get('/{id}', 'BaseController@page');
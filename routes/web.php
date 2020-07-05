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


Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::get('/create-post', 'PostController@index')->name('createpost');
Route::post('/create-post', 'PostController@store');
Route::get('/your-services', 'PostController@show')->name('yourservices');
Route::get('/service/{id}', 'PostController@getPost');
Route::get('/service/editpost/{id}', 'PostController@edit');
Route::post('/service/updatepost/{id}','PostController@update');
Route::delete('/service/deletepost/{id}','PostController@destroy');

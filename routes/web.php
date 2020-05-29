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
    return view('layouts.app');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', 'MainController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'TestController@index');
Route::get('/video{idd}', 'PlayerController@index');
Route::get('/videos{iddd}', 'PlayerControllerrr@index');

Route::get('/menusend{id}', 'MenuController@select');
Route::get('/ganrrr{id}', 'GanrController@select');
Route::get('/team{id}', 'TeamController@select');
Route::post('/videocomment', 'PlayerCommentController@index');
Route::get('/task', 'TaskControllerController@index');


Route::get('/search', 'SearchController@search');
Route::get('/formfilter', 'FormfilterController@formfilter');

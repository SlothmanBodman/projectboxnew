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

//landing page route
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//public application routes
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/projects', 'PagesController@projects')->name('projects');

Route::get('/profile', 'PagesController@profile')->name('profile');

//function routes
Route::post('/newpost', 'PostsController@create')->name('newpost');

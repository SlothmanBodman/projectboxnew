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

/*PUBLIC APPLICATION ROUTES*/

//home page
Route::get('/home', 'HomeController@index')->name('home');

//projects page
Route::get('/projects', 'PagesController@projects')->name('projects');

//profile page
Route::get('/profile', 'PagesController@profile')->name('profile');

/*FUNCTION ROUTES*/

//create a post
Route::post('/newpost', 'PostsController@create')->name('newpost');

//filter feed posts
Route::post('/filter', 'HomeController@filter')->name('filter');

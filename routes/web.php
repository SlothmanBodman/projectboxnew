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

//briefs
Route::get('/brief/{title}', 'PagesController@project')->name('brief');

//profile page
Route::get('/profile', 'PagesController@profile')->name('profile');

//user search query
Route::any('/usersearch', 'UserController@searchUsers')->name('usersearch');

//display user profile
Route::get('/user/{id}', 'PagesController@userprofile')->name('userprofile');

//chats list
Route::get('/chats', 'ChatsController@index')->name('chats');

//chat window
Route::get('/chat/{id}', 'ChatsController@chat')->name('chat');

/*FUNCTION ROUTES*/

//create a post
Route::post('/newpost', 'PostsController@create')->name('newpost');

//filter feed posts
Route::post('/filter', 'HomeController@filter')->name('filter');

//user profile Setting
Route::post('/updateprofile', 'UserController@userSettings')->name('updateprofile');

//create a new chat
Route::post('/newchat', 'ChatsController@newchat')->name('newchat');

/*AJAX ROUTES*/

//like post ajax route
Route::post('/like', 'PostsController@likePost')->name('like');

//unlike post ajax route
Route::post('/unlike', 'PostsController@unlikePost')->name('unlike');

//comment post ajax routes
Route::post('/comment', 'PostsController@createComment')->name('comment');

//follow and unfollow ajax routes
Route::post('/follow', 'FollowController@follow')->name('follow');

Route::post('/unfollow', 'FollowController@unfollow')->name('unfollow');

//send message ajax route
Route::post('/sendmessage', 'ChatsController@sendMessage')->name('sendMessage');

//live get messages Ajax Route
Route::any('/getmessages', 'ChatsController@getMessages')->name('getMessages');

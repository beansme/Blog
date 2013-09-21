<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('users/{id}', function($id)
{
	var_dump("User with the id of $id");
});

Route::resource('posts', 'PostsController');
Route::resource('posts.comments', 'CommentsController');

// Route::get('/','HomeController@getIndex');
// Route::get('login','HomeController@getLogin');
Route::controller('/','HomeController');




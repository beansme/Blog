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

// Route::get('users/{id}', function($id)
// {
// 	var_dump("User with the id of $id");
// });
Route::get('/','PostsController@index');

// Route::get('posts/create',['before' => 'auth', 'uses' => 'PostsController@create']);
// Route::get('posts/{id}/edit', ['before' => 'auth', 'uses' => 'PostsController@edit'] );
Route::resource('posts', 'PostsController');
Route::resource('posts.comments', 'CommentsController');

// Route::get('login','AccountController@getLogin');
// Route::post('login','AccountController@postLogin');
Route::controller('users','UsersController');

// Route::get('posts/create',['before' => 'auth', function(){
// 	Redirect::route('posts.create');
// 	// return "welcome";
// }]); 


// Route::get('/','HomeController@getIndex');
// Route::get('login','HomeController@getLogin');





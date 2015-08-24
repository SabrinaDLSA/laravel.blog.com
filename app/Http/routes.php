<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Curso\Post;
Route::get('/', [
  'as'=> 'home',
  'uses'=> 'WelcomeController@index'
  ]);
Route::get('home', 'WelcomeController@index');

Route::get('/articles/{slug}', [
  'as' => 'article',
  'uses' => 'WelcomeController@article'
  ]);
Route::get('tag/articles/{slug}', [
    'as' => 'article',
    'uses' => 'WelcomeController@article'
    ]);
Route::get('tag/{tag}', [
    'as' => 'tagger',
    'uses' => 'WelcomeController@tags'
    ]);

Route::get('/logout', [
          'as' => 'logout',
          'uses' => 'AdminController@logout'
          ]);
Route::get('profile', [
          'as' => 'profile',
          'uses' => 'AdminController@profile'
          ]);

Route::get('admin/posts/{id}/edit', 'AdminController@edit');

Route::post('admin/posts/{id}/refresh', 'AdminController@refresh');

Route::post('/search', 'WelcomeController@search');

Route::get('admin/posts/{id}/delete','AdminController@delete');

Route::post('admin/profile/ModifyUser',[
  'as' => 'ModyfyUser',
  'uses' => 'AdminController@ModifyUser'
  ]);


Route::get('desktop',[
 'as' => 'desktop',
 'uses' => 'AdminController@desktop'
]);

Route::get('admin', [
  'as'   => 'adminsite',
  'uses' => 'AdminController@admin'
]);

Route::get('admin/posts/NewPost', [
  'as'   => 'NewPost',
  'uses' => 'AdminController@NewPost'
]);

Route::post('admin/posts/NewPost','AdminController@CreatePost');

// Authentication routes...

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email',[
  'as' => 'getPass',
  'uses' =>'Auth\PasswordController@getEmail'
  ]);
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

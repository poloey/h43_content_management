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


# for all
Route::get('/', [
  'uses' => 'PageController@index',
  'as' => 'home'
]);
Route::get('/authors/{id}', [
  'uses' => 'PageController@author',
  'as' => 'author'
]);

Route::get('/posts/{id}', [
  'uses' => 'PostController@show',
  'as' => 'post'
]);
Route::get('/categories/{id}', [
  'uses' => 'CategoryController@show',
  'as' => 'category.show'
]);
Route::post('/comment', 'PostController@comment' )->name('comment');


# guest
Route::group(['middleware' => 'guest'], function () {
  Route::get('/login', [
    'uses' => 'SigninController@login',
    'as' => 'login'
  ]);
  Route::post('/login', [
    'uses' => 'SigninController@store',
    'as' => 'login.store'
  ]);
  Route::get('/register', [
    'uses' => 'SignUpController@register',
    'as' => 'register'
  ]);
  Route::post('/register', [
    'uses' => 'SignUpController@store',
    'as' => 'register.store'
  ]);

});

# authenticate
Route::group(['middleware' => 'auth'], function () {

  Route::get('/dashboard', [
    'uses'=> 'DashboardController@index',
    'as' => 'dashboard.index'
  ]);

  Route::get('/logout', [
    'uses' => 'SigninController@logout',
    'as' => 'logout'
  ]);
  Route::get('dashboard/create', [
    'uses' => 'PostController@create',
    'as' => 'dashboard.create'
  ]);
  Route::post('/create', [
    'uses' => 'PostController@store',
    'as' => 'post.store'
  ]);
});





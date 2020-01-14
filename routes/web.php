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

Auth::routes();

Route::get('/', 'SiteController@index');
Route::get('/a', 'SiteController@crude');
Route::get('/m', 'SiteController@menu');
Route::get('/l', 'UserController@index');
Route::resource('user','UserController');
/*
Route::group(['middleware' => ['auth']],function(){
    Route::resource('Post','PostController');
    Route::get('/meusposts','PostController@indexp');
  });
  
  Route::get('/showg/{id}','PostController@showg');
  
*/
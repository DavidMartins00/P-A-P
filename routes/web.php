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
Route::get('/home', 'SiteController@index');

Route::get('/a', 'SiteController@add');
Route::group(['middleware' => ['auth']],function(){
    Route::group(['middleware' => ['is_admin']],function(){
        
        Route::get('/m', 'SiteController@menu');
        Route::get('/l', 'UserController@index');
        Route::get('/ll', 'UtenteController@index');
        Route::resource('user','UserController');
        Route::resource('utente','UtenteController');
        Route::resource('medica','MedicamentosController');
        Route::resource('servico','ServicoController');
        
    }); 
});

  

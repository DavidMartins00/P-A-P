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
Route::get('/home', 'SiteController@index')->name('/');

Route::post('/send', 'SiteController@sender');

Route::group(['middleware' => ['auth']],function(){
    Route::group(['middleware' => ['is_admin']],function(){

        Route::get('/m', 'SiteController@menu');
        Route::resource('user','UserController');
        Route::resource('utente','UtenteController');
        Route::resource('medica','MedicamentosController');
        Route::resource('servico','ServicoController');
        Route::resource('estado','EstadoController');
        Route::resource('visita','VisitaController');
        //Pesquisar
        Route::get('/pusers','UserController@pesquisar');
        Route::get('/ptt','UtenteController@pesquisar');
        Route::get('/pmed','MedicamentosController@pesquisar');
        Route::get('/pserv','ServicoController@pesquisar');
        Route::get('/pest','EstadoController@pesquisar');
        Route::get('/pvis','VisitaController@pesquisar');
        ////////
        Route::get('/event','EventController@index');
        Route::get('/load-events','EventController@loadEvents')->name('routeLoadEvents');
        Route::put('/event-update','EventController@update')->name('routeEventUpdate');
        Route::post('/event-store','EventController@store')->name('routeEventStore');
        Route::delete('/event-destroy','EventController@destroy')->name('routeEventDelete');


    });
    Route::get('/horario','HorarioController@index');
    Route::get('/load-horario','HorarioController@LoadHorario')->name('routeLoadHorario');

});




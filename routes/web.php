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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil',array(
    'as'=>'profil',
    'uses'=>'Controller@profilMethod'
));

Route::get('/edit',array(
    'as'=>'edit',
    'uses'=>'Controller@editMethod'
));

Route::post('/editForm',array(
    'as'=>'editForm',
    'uses'=>'Controller@editFormService'
));

Route::get('/game',array(
    'as'=>'game',
    'uses'=>'Controller@gameMethod'
));
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

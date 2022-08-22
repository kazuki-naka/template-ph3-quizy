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

Route::get('/quiz/{id?}', 'QuizyController@index');
Route::get('/main', 'QuizyController@main');
if($_POST['delete']){
    Route::post('/main', 'Quizycontroller@delete');
}else{
    Route::post('/main', 'Quizycontroller@edit');
}

Route::get('/add', 'QuizyController@add');
Route::post('/add', 'QuizyController@create');

Route::get('/edit', 'QuizyController@update');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

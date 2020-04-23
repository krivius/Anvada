<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'DocumentController@index');

Route::get('/new/', 'DocumentController@create'); //создаем новый черновик

Route::post('/api/v1/document', 'DocumentController@store'); //сохраняем новый черновик

Route::get('/document/{id}/edit', 'DocumentController@edit');
Route::get('/document/{id}/publish', 'DocumentController@publish');

Route::get('/index', 'DocumentController@index');

Route::patch('/api/v1/document/{id}', 'DocumentController@update');

Route::get('/all', 'DocumentController@all');

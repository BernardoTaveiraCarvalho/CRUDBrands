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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/brands','BrandController@index');
Route::get('/brands/create', 'BrandController@create');
Route::get('/brands/{brand}','BrandController@show');
Route::get('/brands/{brand}/edit','BrandController@edit');
Route::post('/brands', 'BrandController@store');
Route::put('/brands/{brand}', 'BrandController@update');
Route::delete('/brands/{brand}','BrandController@destroy');

Route::get('/cars','CarController@index');
Route::get('/cars/create', 'CarController@create');
Route::get('/cars/{car}','CarController@show');
Route::get('/cars/{car}/edit','CarController@edit');
Route::post('/cars', 'CarController@store');
Route::put('/cars/{car}', 'CarController@update');
Route::delete('/cars/{car}','CarController@destroy');

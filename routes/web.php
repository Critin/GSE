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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

# Empresas
Route::get('/companies', 'CompaniesController@index');
Route::resource('companies', 'CompaniesController');
Route::get('/companies/{companies}', 'CompaniesController@show');
Route::post('/companies/{companies}', 'CompaniesController@store');
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

# Estudiantes
Route::get('/students', 'StudentsController@index');
Route::resource('students', 'StudentsController');
Route::get('/students/{students}', 'StudentsController@show');
Route::post('/students/{students}', 'StudentsController@store');

#Grados
Route::get('/grades', 'GradesController@index');
Route::resource('grades', 'GradesController');
Route::get('/grades/{grades}', 'GradesController@show');
Route::post('/grades/{grades}', 'GradesController@store');

#Estudios
Route::get('/studies', 'StudiesController@index');
Route::resource('studies', 'StudiesController');

#Peticiones
Route::get('/petitions', 'PetitionsController@index');
Route::resource('petitions', 'PetitionsController');
Route::get('/petitions/{petitions}', 'PetitionsController@show');
Route::post('/petitions/{petitions}', 'PetitionsController@store');

#PDF
Route::get('/petitions', 'PetitionsController@index')->name('listados');
Route::get('descargar-listados', 'PetitionsController@pdf')->name('listado.pdf');

#Listados
Route::get('/listados', 'ListController@index');
Route::resource('petitions', 'ListController');

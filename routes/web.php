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
Route::get('/quienesSomos', 'quienesSomosController@index')->name('quienesSomos');
Route::get('/ofertaAcademica', 'ofertaAcademicaController@index')->name('ofertaAcademica');
Route::get('/contacto', 'contactoController@index')->name('contacto');
Route::get('/formularioInscripcion', 'formularioInscripcionController@index')->name('formularioInscripcion');

Route::post('nuevoingreso','formularioInscripcionController@store')->name('nuevoingreso');

//prueba
Route::get('/prueba', 'PruebaController@index')->name('prueba');
Route::post('archivo','PruebaController@store')->name('archivo');
Route::get('/download', 'PruebaController@getDownload')->name('download');

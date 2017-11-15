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

//Retorna sólo  una vista desde la ruta con un alias para blade
Route::view('/', 'home') -> name('home');

//Retorna sólo una vista desde la ruta
Route::view('vista', 'vista',['variable'=>'Este el paso de una variable desde routa-vista'])->name('vista');

//Llamado a un controlador
Route::get('controlador', ['as' =>'inicio', 'uses'=>'PagesController@home']);

//LLamado a un controlador con variable por URL
Route::get('saludos/{nombre?}', ['as'=>'saludos', 'uses' => 'PagesController@saludos'])->where('nombre', "[A-Za-z]+");

//Ejemplo de formulario
Route::get('contactame',['as'=>'contactos', 'uses'=> 'PagesController@contact']);
Route::post('contacto', 'PagesController@mensaje');
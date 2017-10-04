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

Route::get('contacto', function(){
	return "Hoja de contacto";
});

Route::get('/', function(){
	//return "Hola desde la pagina de inicio";
	echo '<a href="'.route('contactos').'">CONTACTO</a>';
	return view ('home');
});

Route::get('contacto', ['as'=>'contactos', function(){
	return "Seccion de contactos";
}]);

Route::get('saludos/{nombre?}', ['as'=>'saludos',function($nombre = "Invitado"){
	//return "Saludos $nombre";
	//return view('saludos', ['nombre' => $nombre]);
	$html = "<h2>HOLA ESTO ES UN VIRUS</h2>";
	$consolas = [
		"Nintendo Wii", 
		//"Xbos Live",
		//"PS4"
	];
	return view('saludos', compact('nombre', 'html','consolas'));

}])->where('nombre', "[A-Za-z]+");

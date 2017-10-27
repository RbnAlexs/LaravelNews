<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	echo 'HOLA';
    	return view('home');
    }

    public function saludos($nombre = "invitado"){
    	$html = "<h2>HOLA ESTO ES UN VIRUS</h2>";
		$consolas = [
			"Nintendo Wii", 
			"Xbos Live",
			"PS4"
		];
		return view('saludos', compact('nombre', 'html','consolas'));
    }

    public function mensajes(){

    	return "Procesando el mensaje...";

    }
}

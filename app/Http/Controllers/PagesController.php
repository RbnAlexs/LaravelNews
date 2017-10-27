<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	//protected $request;

	/*public function __construct(Request $request){
		$this->request = $request;
	}*/

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

    public function contact(){

    	return view('contactos');

    }

    //Llamada a Request si sólo esta funcion va a necesitarla
    public function mensaje( Request $request){
    	$this-> validate($request,[
    		'nombre' =>'required', 
    		'email' => 'required|email',
    		'mensaje' => 'required|min:5'
    		]);
    	return $request->all();
    }
}

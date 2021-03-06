<?php

class MailController extends BaseController{

	public function email()
	{
		$inputs = Input::all();
		$rules = [
			'name' => 'required',
			'email' => 'email',
			'mensaje' => 'required'
		];

		$validator = Validator::make($inputs, $rules);

		if($validator->passes()){
			
			$nombre = Input::get('name');
		    $email = Input::get('email');
		    $mensaje = Input::get('mensaje');
		    
		    Mail::send('emails.auth.mail', $data = ['nombre' => $nombre,'email' => $email, 'mensaje' => $mensaje], function($message) {
		    	$message->from( Input::get('email'), '');
	        	$message->to('info@nedblu.com', 'Name')->subject( 'NedBLU Site ...' );
		    });
		    
		    return Redirect::to('/#contacto')->with([
	    		'msg' => 'Correo enviado exitosamente...',
	    		'res' => 'yes'
	    	]);
		
		}

	    return Redirect::to('/#contacto')->with([
    		'msg' => 'El correo NO se pudo enviar, ingresa los datos en el formato correcto. * Todos los campos son obligatorios...',
    		'res' => 'no'
    	]);

	}
	
}
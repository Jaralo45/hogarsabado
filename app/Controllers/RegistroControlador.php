<?php namespace App\Controllers;

class RegistroControlador extends BaseController{
    
    public function index(){
		return view('vistaRegistro');
	}

	public function registrar(){

	
		$nombre=$this->request->getPost("nombre");
		echo($nombre);

	

		


	}

	//--------------------------------------------------------------------

}

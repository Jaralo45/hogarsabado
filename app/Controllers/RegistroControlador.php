<?php namespace App\Controllers;

use App\Models\Modelopersonas;

class RegistroControlador extends BaseController{
    
    public function index(){
		return view('vistaRegistro');
	}

	public function registrar(){

		//1. Recibir los datos desde la vista
		$nombre=$this->request->getPost("nombre");
		$edad=$this->request->getPost("edad");
		$cedula=$this->request->getPost("cedula");
		$poblacion=$this->request->getPost("poblacion");
		$descripcion=$this->request->getPost("descripcion");

		//2. Organizar los datos que llegan de las vistas
		// en un arreglo asociativo 
		//(las claves deben ser iguales a los campos o atributos de la tabla en BD)
		$datosEnvio=array(
			"nombre"=>$nombre,
			"edad"=>$edad,
			"cedula"=>$cedula,
			"poblacion"=>$poblacion,
			"descripcion"=>$descripcion
		);

		//3. Crear un objeto del MODELO para porder 
		//realizar la transacción en BD
		$modeloPersonas= new Modelopersonas();

		//4. Utilizar el modelo para insertar los datos
		try{
			
			$modeloPersonas->insert($datosEnvio);
			echo("Registro agregado");	


		}catch(\Exception $error){

			echo($error->getMessage());

		}




	

		


	}

	//--------------------------------------------------------------------

}

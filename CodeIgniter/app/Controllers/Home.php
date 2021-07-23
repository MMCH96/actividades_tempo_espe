<?php namespace App\Controllers;

use App\Models\ModeloPrincipal;

class Home extends BaseController
{
	

	

	public function index()
	{
		$ModeloPrincipal = new ModeloPrincipal();

		$datos3 = $ModeloPrincipal->Mostrar();

		//print_r($datos3);

		$data = [
			"datos" => $datos3
			];
		
		echo view('Header3');
		echo view('Estatus',$data);
		echo view('Footer');
				
	}

	public function form()
	{
		
		$controlador = $_POST["controlador"];

		if($controlador == 1){
		echo view('Header2');
		echo view('FormEspeciales');
		echo view('Footer');
		}
		elseif($controlador == 0)
		{
		echo view('Header');
		echo view('FormTemporada');
		echo view('Footer');
		}
				
	}

	public function EliminarAE($idAespecial){
		$ModeloPrincipal = new ModeloPrincipal();
		$data = ["id_AE" => $idAespecial];
		$respuesta = $ModeloPrincipal->EliminarAE($data);
		//$ModeloPrincipal->EliminarAE($idAespecial);

		redirect('Home/index');

	}

	

	
}

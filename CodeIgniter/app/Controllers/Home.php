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
		print_r($_POST);

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

	public function EliminarAE(){
		
		
		$id = $_POST['id'];
		//print_r($id);
		$ModeloPrincipal = new ModeloPrincipal();
		
		$ModeloPrincipal->EliminarAE($id);
		return redirect()->to(base_url().'/public/Home/index');
		//redirect('Home/index');

	}

	public function crearE(){
		
	
			$nombre = $_POST['nombre'];
			$fecha = $_POST['fecha'];
			$minA = "0";
			$maxA = $_POST['maxA'];
			$requ = $_POST['requi'];
			$regl = $_POST['regla'];
			$costo = $_POST['costo'];
			$lugar = $_POST['lugar'];

			
			//print_r($nombre);

		$ModeloPrincipal = new ModeloPrincipal();

		$ModeloPrincipal->CrearAE($nombre,$fecha,$minA,$maxA,$requ,$regl,$costo,$lugar);

		return redirect()->to(base_url().'/public/Home/index');

		

	}
	

	
}

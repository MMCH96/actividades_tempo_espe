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

	public function index2()
	{

		$ModeloPrincipal = new ModeloPrincipal();

		$datos3 = $ModeloPrincipal->Mostrar2();

		//print_r($datos3);

		$data = [
			"datos" => $datos3
			];
		
		echo view('Header3');
		echo view('Estatus2',$data);
		echo view('Footer');
				
	}

	public function inicio()
	{
			
				echo view('Header3');
				echo view('inicio');
				echo view('Footer');
				
	}


	public function form()
	{
	
		
		echo view('Header2');
		echo view('FormEspeciales');
		echo view('Footer');
		
				
	}

	public function form2()
	{
		echo view('Header');
		echo view('FormTemporada');
		echo view('Footer');
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
			$minA = $_POST['minA'];
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

	public function editar(){
		$id = $_POST['id2'];
		//print_r($id);

		$ModeloPrincipal = new ModeloPrincipal();

		$datos3 = $ModeloPrincipal->editar($id);

		//print_r($datos3);

		$data = [
			"datos" => $datos3
			];

		echo view('Header2');
		echo view('EditAE',$data);
		echo view('Footer');


	}

	public function actualizarAE(){


			$id = $_POST['idAE'];
			$nombre = $_POST['nombre'];
			$fecha = $_POST['fecha'];
			$minA = $_POST['minA'];
			$maxA = $_POST['maxA'];
			$requ = $_POST['requi'];
			$regl = $_POST['regla'];
			$costo = $_POST['costo'];
			$lugar = $_POST['lugar'];

		
		$ModeloPrincipal = new ModeloPrincipal();

		$ModeloPrincipal->actualizarAE($id,$nombre,$fecha,$minA,$maxA,$requ,$regl,$costo,$lugar);

		return redirect()->to(base_url().'/public/Home/index');


	}

	// TEMPORADA

	public function crearT(){
		
	
			$nombre = $_POST['nombre'];
			$fecha = $_POST['fecha'];
			$minA = $_POST['minA'];
			$maxA = $_POST['maxA'];
			$requ = $_POST['requi'];
			$regl = $_POST['regla'];
			$costo = $_POST['costo'];
			$lugar = $_POST['lugar'];

			
			//print_r($nombre);

		$ModeloPrincipal = new ModeloPrincipal();

		$ModeloPrincipal->CrearAT($nombre,$fecha,$minA,$maxA,$requ,$regl,$costo,$lugar);

		return redirect()->to(base_url().'/public/Home/index2');

		
	}

	public function EliminarAT(){
		
		
		$id = $_POST['id'];
		//print_r($id);
		$ModeloPrincipal = new ModeloPrincipal();
		
		$ModeloPrincipal->EliminarAT($id);
		return redirect()->to(base_url().'/public/Home/index2');
		//redirect('Home/index');

	}

	public function editarT(){
		$id = $_POST['id2'];
		//print_r($id);

		$ModeloPrincipal = new ModeloPrincipal();

		$datos3 = $ModeloPrincipal->editarT($id);

		//print_r($datos3);

		$data = [
			"datos" => $datos3
			];

		echo view('Header2');
		echo view('EditAT',$data);
		echo view('Footer');


	}

	public function actualizarAT(){


			$id = $_POST['idAT'];
			$nombre = $_POST['nombre'];
			$fecha = $_POST['fecha'];
			$minA = $_POST['minA'];
			$maxA = $_POST['maxA'];
			$requ = $_POST['requi'];
			$regl = $_POST['regla'];
			$costo = $_POST['costo'];
			$lugar = $_POST['lugar'];

		
		$ModeloPrincipal = new ModeloPrincipal();

		$ModeloPrincipal->actualizarAT($id,$nombre,$fecha,$minA,$maxA,$requ,$regl,$costo,$lugar);

		return redirect()->to(base_url().'/public/Home/index2');


	}
	

	
}

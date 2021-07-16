<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('Header3');
		echo view('Estatus');
		echo view('Footer');
				
	}

	public function formTempo()
	{
		echo view('Header');
		echo view('FormTemporada');
		echo view('Footer');
	}

	public function formEspec()
	{
		echo view('Header2');
		echo view('FormEspeciales');
		echo view('Footer');
	}

	
}

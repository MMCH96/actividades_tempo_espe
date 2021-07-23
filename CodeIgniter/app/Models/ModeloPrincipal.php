<?php namespace App\Models;

use CodeIgniter\Model;

class ModeloPrincipal extends Model
{
	

	public function Mostrar()
	{
	$consulta3 = $this->db->query("SELECT idAespecial,Nombre,fecha,lugar,costo,maxA FROM aespeciales ");
	return $consulta3->getResult();	
	}

	public function EliminarAE($idAespecial)
	{
		$this->db->query("DELETE FROM aespeciales WHERE idAespecial = '$idAespecial' ");
		

		//$AE = $this->db->table('aespeciales');
		//$AE->where($idAespecial);
		//return $AE->delete();
		//$this->db->where('idAespecial',$idAespecial);
		//$resp = $this->db->delete('aespeciales');
		//return $resp;
	}

	public function CrearAE($nombre,$fecha,$minA,$maxA,$requi,$regla,$costo,$lugar){

		$this->db->query("INSERT INTO aespeciales(idAespecial, Nombre, fecha, minA, maxA, Requisitos, reglamento, costo, lugar) VALUES (NULL,'$nombre','$fecha','$minA','$maxA','$requi','$regla','$costo','$lugar')");
	
	}





}





 ?>

 
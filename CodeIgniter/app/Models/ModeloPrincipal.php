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

	public function actualizarAE($id,$nombre,$fecha,$minA,$maxA,$requi,$regla,$costo,$lugar)
	{
		$this->table='aespeciales';
		$this->db->query("UPDATE aespeciales SET Nombre ='$nombre',fecha='2019-02-02',minA='$minA',maxA='$maxA',Requisitos='$requi',reglamento='$regla',costo='$costo',lugar='$lugar' WHERE idAespecial = '$id'");
		


		
	}

	public function editar($id){
		$consulta3 = $this->db->query("SELECT * FROM aespeciales WHERE idAespecial = '$id'");
	return $consulta3->getResult();	
	}


}





 ?>

 
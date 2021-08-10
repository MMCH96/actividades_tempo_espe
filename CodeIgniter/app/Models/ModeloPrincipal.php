<?php namespace App\Models;

use CodeIgniter\Model;

class ModeloPrincipal extends Model
{
	

	public function Mostrar()
	{
	$consulta3 = $this->db->query("SELECT idAespecial,Nombre,fecha,lugar,costo,maxA FROM aespeciales ");
	return $consulta3->getResult();	
	}

	public function Mostrar2()
	{
	$consulta3 = $this->db->query("SELECT idAtemp,nombre,fecha,Lugar,costo,maxA FROM atemporada ");
	return $consulta3->getResult();	
	}

	public function EliminarAE($idAespecial)
	{
		$this->db->query("DELETE FROM aespeciales WHERE idAespecial = '$idAespecial' ");
	
	}

	public function CrearAE($nombre,$fecha,$minA,$maxA,$requi,$regla,$costo,$lugar){

		$this->db->query("INSERT INTO aespeciales(idAespecial, Nombre, fecha, minA, maxA, Requisitos, reglamento, costo, lugar) VALUES (NULL,'$nombre','$fecha','$minA','$maxA','$requi','$regla','$costo','$lugar')");
	
	}

	public function actualizarAE($id,$nombre,$fecha,$minA,$maxA,$requi,$regla,$costo,$lugar)
	{

		$this->db->query("UPDATE aespeciales SET Nombre ='$nombre',fecha='$fecha',minA='$minA',maxA='$maxA',Requisitos='$requi',reglamento='$regla',costo='$costo',lugar='$lugar' WHERE idAespecial = '$id'");
		$this->db->table('aespeciales');
	
		
	}

	public function editar($id){
		$consulta3 = $this->db->query("SELECT * FROM aespeciales WHERE idAespecial = '$id'");
	return $consulta3->getResult();	
	}


// TEMPORADA

	public function CrearAT($nombre,$fecha,$minA,$maxA,$requi,$regla,$costo,$lugar){

		$this->db->query("INSERT INTO atemporada(idAtemp, nombre, fecha, minA, maxA, Requisitos, Reglamento, Lugar, costo) VALUES (NULL,'$nombre','$fecha','$minA','$maxA','$requi','$regla','$lugar','$costo')");
	
	}




public function EliminarAT($idAtemp)
	{
		
		$this->db->query("DELETE FROM atemporada WHERE idAtemp = '$idAtemp' ");
	
	}

public function editarT($id){
		$consulta3 = $this->db->query("SELECT * FROM atemporada WHERE idAtemp = '$id'");
	return $consulta3->getResult();	
	}


public function actualizarAT($id,$nombre,$fecha,$minA,$maxA,$requi,$regla,$costo,$lugar)
	{

		$this->db->query("UPDATE atemporada SET nombre ='$nombre',fecha='$fecha',minA='$minA',maxA='$maxA',Requisitos='$requi',Reglamento='$regla',costo='$costo',Lugar='$lugar' WHERE idAtemp = '$id'");
		$this->db->table('aespeciales');
	
		
	}

}


 ?>

 
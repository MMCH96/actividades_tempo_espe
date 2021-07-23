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
		$AE = $this->db->table('aespeciales');
		$AE->where($idAespecial);
		return $AE->delete();
		//$this->db->where('idAespecial',$idAespecial);
		//$this->db->delete('aespeciales');
	}





}





 ?>

 
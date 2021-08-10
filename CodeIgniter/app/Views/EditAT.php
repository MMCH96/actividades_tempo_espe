<title>Actividades de Temporada</title>
	
                     
	<section  class="col-md-12 container-fluid" style="background-color:#E9967A; height: 664px;">
		<div id="fr1"  class="col-md-6" >

		<form method="POST" action="<?php echo base_url('/public/Home/actualizarAT') ?>">
			<?php foreach ($datos as $x): ?>
			<p style="	top: 50px; 	position: absolute;	left: 30px;font-size: 18px;" >ID:</p>
			<input id="txtID"  type="txt" readonly="readonly" name="idAT" size="40" value="<?php echo $x->idAtemp ?>">

			<p style="	top: 110px; position: absolute;	left: 30px;font-size: 18px;">Nombre:</p>
			<input id="txtNombreE" type="text" name="nombre" size="40" value="<?php echo $x->nombre ?>">

			<p style="top: 170px;position: absolute;left: 30px;font-size: 18px;">Lugares disponibles:</p>	
			<input id="txtLugaresE" type="text" name="maxA" size="40" value="<?php echo $x->maxA ?>">

			<p style="top: 230px;position: absolute;left: 30px;font-size: 18px;">Reglamento:</p>
			<textarea id="txtReglaE" name="regla"   rows="2" cols="43" ><?php echo $x->Reglamento ?></textarea>

			<p style="top: 330px;position: absolute;left: 30px;font-size: 18px;">Requisitos:</p>
			<textarea id="txtRequisitosE"  name="requi" rows="2" cols="43" ><?php echo $x->Requisitos ?></textarea>

			<p style="top: 430px;position: absolute;left: 30px;font-size: 18px;">Minimo de Participantes:</p>
			<input id="txtMinAE" type="text" name="minA" size="40" value="<?php echo $x->minA ?>">
			


		
			
		</div>

		<div id="fr2"  class="col-md-6">
			<p style="	top: 50px; 	position: absolute;	left: 110px;font-size: 18px;" >Fecha: <input type="date" name="fecha" value="<?php echo $x->fecha ?>"></p>

			<p style="	top: 110px; 	position: absolute;	left: 110px;font-size: 18px;" >Lugar: <input type="text" name="lugar" size="40" value="<?php echo $x->Lugar ?>"></p>

			<p style="	top: 170px; 	position: absolute;	left: 110px;font-size: 18px;" >Costo: <input type="text" name="costo" size="40" value="<?php echo $x->costo ?>"></p>

			<div id="logo" style="padding-top: 220px; padding-left: 180px;">
				<img src="<?php echo base_url ();?>/assets/img/latoure.png" width="300" height="250" >
				
			</div> 
			<button id="btnGuardar" onclick="mensaje()" style="background-color: lightgreen;" class="btn btn-pr">Guardar</button> 
			<a id="btnCancelar" class="btn btn-default" href="<?php echo base_url('/public/Home/index2')?>">Cancelar</a> 
			

		</div>
		   <?php endforeach ?>
	</form>	
	<script src="<?php echo base_url ();?>/assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>/assets/libs/sweetalert2/dist/sweetalert2.min.css">
    

    <script >
      
                    function mensaje()
                    {
                  Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Cambios Guardados',
  showConfirmButton: false,
  timer: 1500
})
                    }   
    </script>
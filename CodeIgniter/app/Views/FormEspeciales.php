
<title>Actividades Especiales</title>
	<section  class="col-md-12 container-fluid" style="background-color:#E9967A;">
		<div id="fr1"  class="col-md-6" >
		<form method="POST" action="<?php echo base_url('/public/Home/crearE') ?>">
			<p id="lblNombre">Nombre:</p>
			<input id="txtNombre" type="text" name="nombre" size="40">
			<p id="lblLugares">Lugares disponibles:</p>	
			<input id="txtLugares" type="text" name="maxA" size="40">
			<p id="lblRegla">Reglamento:</p>
			<textarea id="txtRegla" name="regla"  rows="2" cols="38"></textarea>
			<p id="lblRequisitos" >Requisitos:</p>
			<textarea id="txtRequisitos" name="requi" rows="2" cols="38"></textarea>
			


		
			
		</div>

		<div id="fr2"  class="col-md-6">
			<p id="dtFecha">Fecha: <input type="date" name="fecha"></p>

			<p id="txtLgr">Lugar: <input type="text" name="lugar" size="40"></p>

			<p id="txtcosto">Costo: <input type="text" name="costo" size="40"></p>

			<div id="logo" style="padding-top: 175px; padding-left: 180px;">
				<img src="<?php echo base_url ();?>/assets/img/latoure.png" width="300" height="250" >
				
			</div> 
			<button id="btnGuardar" style="background-color: lightgreen;" class="btn btn-pr">Guardar</button> 
			<a id="btnCancelar" class="btn btn-default" href="<?php echo base_url('/public/Home/index')?>">Cancelar</a> 
			

		</div>
	</form>	
<title>Actividades Especiales</title>
	
                     
	<section  class="col-md-12 container-fluid" style="background-color:#E9967A;">
		<div id="fr1"  class="col-md-6" >

		<form method="POST" action="<?php echo base_url('/public/Home/actualizarAE') ?>">
			<?php foreach ($datos as $x): ?>
			<p desable  id="lblNombre">ID:</p>
			<input id="txtNombre" desable type="text" name="idAE" size="40" value="<?php echo $x->idAespecial ?>">
			<p id="lblNombre">Nombre:</p>
			<input id="txtNombre" type="text" name="nombre" size="40" value="<?php echo $x->Nombre ?>">
			<p id="lblLugares">Lugares disponibles:</p>	
			<input id="txtLugares" type="text" name="maxA" size="40" value="<?php echo $x->maxA ?>">
			<p id="lblRegla">Reglamento:</p>
			<textarea id="txtRegla" name="regla"   rows="2" cols="38" ><?php echo $x->reglamento ?></textarea>
			<p id="lblRequisitos" >Requisitos:</p>
			<textarea id="txtRequisitos"  name="requi" rows="2" cols="38" ><?php echo $x->Requisitos ?></textarea>
			


		
			
		</div>

		<div id="fr2"  class="col-md-6">
			<p id="dtFecha">Fecha: <input type="date" name="fecha" value="<?php echo $x->fecha ?>"></p>

			<p id="txtLgr">Lugar: <input type="text" name="lugar" size="40" value="<?php echo $x->lugar ?>"></p>

			<p id="txtcosto">Costo: <input type="text" name="costo" size="40" value="<?php echo $x->costo ?>"></p>

			<div id="logo" style="padding-top: 175px; padding-left: 180px;">
				<img src="<?php echo base_url ();?>/assets/img/latoure.png" width="300" height="250" >
				
			</div> 
			<button id="btnGuardar" style="background-color: lightgreen;" class="btn btn-pr">Editar</button> 
			<a id="btnCancelar" class="btn btn-default" href="<?php echo base_url('/public/Home/index')?>">Cancelar</a> 
			

		</div>
		   <?php endforeach ?>
	</form>	
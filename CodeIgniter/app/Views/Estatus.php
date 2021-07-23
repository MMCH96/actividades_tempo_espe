<div class="col-md-12">
  
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"><center>Estatus</center></h3>
              </div>
              <div style="height: 615px;" class="panel-body">
                <div class="row">
                      <div class="col-md-9">

              <form method="post" action="<?php echo base_url('/public/Home/form')?>">
                <select name="controlador">
                              
                  <option disabled selected >Selecciona una opción</option>
                  <option value="1" >A. Especiales</option>
                  <option value="0" >A. Temporada</option>
              </select>
              <input style="background-color: lightgreen; position: absolute; bottom: -5px; right: 800px" class="btn btn-default" type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Nuevo Evento">
              </form>
              
                </div>
                </div>
                <br>
                
                <table class="table table-striped table-hover">
                      <tr>
                          <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Lugar</th>
                        <th>Costo</th>
                        <th>Disponilidad</th>
                        <th></th>
                        <th></th>
                      </tr>
                                           
                      <?php foreach ($datos as $x): ?>
                      <tr>
                        <td><?php echo $x->idAespecial ?></td>
                        <td><?php echo $x->Nombre ?></td>
                        <td><?php echo $x->fecha ?></td>
                        <td><?php echo $x->lugar ?></td>
                        <td><?php echo $x->costo ?></td>
                        <td><?php echo $x->maxA ?></td>
                        <td></td>

                        <td><a class="btn btn-default" href="editar.html">Consultar</a> 
                          <a class="btn btn-danger" href="<?php echo base_url().'/EliminarAE/' .$x->idAespecial?>">Eliminar</a></td></td>
                        
                      </tr>
                      <?php endforeach ?>
                      
                     </table>
              </div>


          </div>
    
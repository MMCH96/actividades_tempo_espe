<div class="col-md-12">

            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"><center>Estatus Actividades Especiales</center></h3>
              </div>
              <div style="height: 615px;" class="panel-body">
                <div class="row">
                      <div class="col-md-9">

              <form method="post" action="<?php echo base_url('/public/Home/form')?>">
                
              
              <button style="background-color: lightgreen; position: absolute; bottom: -5px; right: 975px" class="btn btn-default" type="submit"   tabindex="4"  value=""><b>Nuevo Evento</b> </button> 
              
              </form>
              
              <form method="post" action="<?php echo base_url('/public/Home/inicio')?>">
                
              
              <button style="background-color: orange; position: absolute; bottom: -5px; right: 800px" class="btn btn-default" type="submit"   tabindex="4"  value=""><b>Regresar a Inicio</b> </button> 
              
              </form>
              




                </div>
                </div>
                <br>

                <table class="table table-striped table-hover">
                      <tr >
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
                        <td ><?php echo $x->idAespecial ?></td>
                        <td><?php echo $x->Nombre ?></td>
                        <td><?php echo $x->fecha ?></td>
                        <td><?php echo $x->lugar ?></td>
                        <td><?php echo $x->costo ?></td>
                        <td><?php echo $x->maxA ?></td>

                        <form method="POST" action="<?php echo base_url('/public/Home/EliminarAE')?>">
                        <td><button class="btn btn-danger" tabindex="4" type="submit" name="id" value="<?php echo $x->idAespecial ?>" > <b>Eliminar</b></td>  
                        </form>

                        <form method="POST" action="<?php echo base_url('/public/Home/editar')?>">
                            
                              <td><button class="btn btn-default"  type="submit" name="id2" value="<?php echo $x->idAespecial ?>" ><b>Editar</b></td>
                                
                          </form>                                            
                      </tr>
                      
                      
                    
                      
                        
                      <?php endforeach ?>

                     </table>
              </div>


          </div>
    
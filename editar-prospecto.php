<?php
      $id = $_GET['id'];
      if(!filter_var($id, FILTER_VALIDATE_INT)){
          die('Error');
      }
      
      include_once 'funciones/sesiones.php';
      include_once 'funciones/funciones.php';
      include_once 'templates/header.php';
      include_once 'templates/barra.php';
      include_once 'templates/navegacion.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Prospectos
        <small>llena el formulario para editar un prospecto</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-8">
      
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Prospecto</h3>
            </div>
            <div class="box-body">
                <?php
                    $sql = "SELECT * FROM prospecto WHERE id_prospecto = $id ";
                    $resultado = $conn->query($sql);
                    $prospectos = $resultado->fetch_assoc();
                ?>
                <!-- form start -->
                <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-invitado.php" enctype="multipart/form-data">
                      <div class="box-body">
                            <div class="form-group">
                                <label for="nombre_invitado">Nombre:</label>
                                <input type="text" class="form-control" id="nombre_invitado" name="nombre_invitado" placeholder="Nombre" value="<?php echo $prospectos['nombre_prospecto']; ?>">
                            </div>   
                            <div class="form-group">
                                <label for="apellido_invitado">Apellido:</label>
                                <input type="text" class="form-control" id="apellido_invitado" name="apellido_invitado" placeholder="Apellido" value="<?php echo $prospectos['apellido_prospecto']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="cedula_prospecto">Cedula de Identidad:</label>
                                <input type="text" class="form-control" id="cedula_prospecto" name="cedula_prospecto" placeholder="Numero de Cedula" value="<?php echo $prospectos['cedula_prospecto']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="ciudad_prospecto">Ciudad:</label>
                                <input type="text" class="form-control" id="ciudad_prospecto" name="ciudad_prospecto" placeholder="Ciudad" value="<?php echo $prospectos['ciudad_prospecto']; ?>">
                            </div> 
                            <div class="form-group">
                                <label for="municipio_prospecto">Municipio:</label>
                                <input type="text" class="form-control" id="municipio_prospecto" name="municipio_prospecto" placeholder="Municipio" value="<?php echo $prospectos['municipio_prospecto']; ?>">
                            </div>   
                            <div class="form-group">
                                <label for="colonia_prospecto">Colonia o Barrio:</label>
                                <input type="text" class="form-control" id="colonia_prospecto" name="colonia_prospecto" placeholder="Colonia, Villa o Barrio" value="<?php echo $prospectos['barrio_prospecto']; ?>">
                            </div>  
                            <div class="form-group">
                                <label for="direccion_prospecto">Dirección:</label>
                                <input type="text" class="form-control" id="direccion_prospecto" name="direccion_prospecto" placeholder="Dirección indicando un punto de referencia" value="<?php echo $prospectos['direccion_prospecto']; ?>">
                            </div>  
                            <div class="form-group">
                                <label for="imagen_actual">Imagen Actual</label>
                                <br>
                                <img src="img/prospectos/<?php echo $prospectos['foto_prospecto']; ?>" width="200">
                            </div>
                            <div class="form-group">
                                <label for="imagen_invitado">Imagen:</label>
                                <input clase="form-control" type="file" id="imagen_invitado" name="archivo_imagen">
                                <p class="help-block">Añada la imagen del prospecto aquí</p>
                            </div> 
                            <div class="form-group">
                                <label for="biografia_invitado">Observacion: </label>
                                <textarea class="form-control" name="biografia_invitado" id="biografia_invitado"  rows="8" placeholder="Observaciones que destaquen del prospecto"><?php echo $prospectos['observacion_prospecto']; ?></textarea>
                            </div> 
                            <div class="form-group">
                                <label for="facebook_url">Facebook:</label>
                                <input type="text" class="form-control" id="facebook_url" name="facebook_url" placeholder="Facebook o No encontrado" value="<?php echo $prospectos['url_facebook']; ?>">
                            </div> 
                            <div class="form-group">
                                <label for="twitter_url">Twitter:</label>
                                <input type="text" class="form-control" id="twitter_url" name="twitter_url" placeholder="Twitter o No encontrado" value="<?php echo $prospectos['url_twitter']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="telefono_prospecto">Telefono:</label>
                                <input type="text" class="form-control" id="telefono_prospecto" name="telefono_prospecto" placeholder="Telefono" value="<?php echo $prospectos['telefono_prospecto']; ?>">
                            </div>  
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                          <input type="hidden" name="registro" value="actualizar">
                            <input type="hidden" name="id_registro" value="<?php echo $prospectos['id_prospecto']; ?>">
                          <button type="submit" class="btn btn-primary" id="crear_registro_invitado">Añadir</button>
                      </div>
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
        <!-- /.content -->
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <?php
        include_once 'templates/footer.php';
  ?>


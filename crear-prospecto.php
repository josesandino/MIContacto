<?php
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
        Crear Prospectos
        <small>llena el formulario para añadir un prospecto</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-8">
      
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Prospecto</h3>
            </div>
            <div class="box-body">
                <!-- form start -->
                <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-invitado.php" enctype="multipart/form-data">
                      <div class="box-body">
                            <div class="form-group">
                                <label for="nombre_invitado">Nombre:</label>
                                <input type="text" class="form-control" id="nombre_invitado" name="nombre_invitado" placeholder="Nombre">
                            </div>   
                            <div class="form-group">
                                <label for="apellido_invitado">Apellido:</label>
                                <input type="text" class="form-control" id="apellido_invitado" name="apellido_invitado" placeholder="Apellido">
                            </div>
                            <div class="form-group">
                                <label for="cedula_prospecto">Cedula de Identidad:</label>
                                <input type="text" class="form-control" id="cedula_prospecto" name="cedula_prospecto" placeholder="Numero de Cedula">
                            </div>
                            <div class="form-group">
                                <label for="ciudad_prospecto">Ciudad:</label>
                                <input type="text" class="form-control" id="ciudad_prospecto" name="ciudad_prospecto" placeholder="Ciudad">
                            </div> 
                            <div class="form-group">
                                <label for="municipio_prospecto">Municipio:</label>
                                <input type="text" class="form-control" id="municipio_prospecto" name="municipio_prospecto" placeholder="Municipio">
                            </div>   
                            <div class="form-group">
                                <label for="colonia_prospecto">Colonia o Barrio:</label>
                                <input type="text" class="form-control" id="colonia_prospecto" name="colonia_prospecto" placeholder="Colonia, Villa o Barrio">
                            </div>  
                            <div class="form-group">
                                <label for="direccion_prospecto">Dirección:</label>
                                <input type="text" class="form-control" id="direccion_prospecto" name="direccion_prospecto" placeholder="Dirección indicando un punto de referencia">
                            </div>  
                            <div class="form-group">
                                <label for="imagen_invitado">Imagen:</label>
                                <input clase="form-control" type="file" id="imagen_invitado" name="archivo_imagen">
                                <p class="help-block">Añada la imagen del prospecto aquí</p>
                            </div> 
                            <div class="form-group">
                                <label for="biografia_invitado">Observacion: </label>
                                <textarea class="form-control" name="biografia_invitado" id="biografia_invitado"  rows="8" placeholder="Observaciones que destaquen del prospecto"></textarea>
                            </div> 
                            <div class="form-group">
                                <label for="facebook_url">Facebook:</label>
                                <input type="text" class="form-control" id="facebook_url" name="facebook_url" placeholder="Facebook o No encontrado">
                            </div> 
                            <div class="form-group">
                                <label for="twitter_url">Twitter:</label>
                                <input type="text" class="form-control" id="twitter_url" name="twitter_url" placeholder="Twitter o No encontrado">
                            </div>
                            <div class="form-group">
                                <label for="telefono_prospecto">Telefono:</label>
                                <input type="text" class="form-control" id="telefono_prospecto" name="telefono_prospecto" placeholder="Telefono">
                            </div>  
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                          <input type="hidden" name="registro" value="nuevo">
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


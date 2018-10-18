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
        Base de Prospectos
        <small>MI Contacto verificado</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
        <h2 class="mt-0 mb-1"><b>Actividades a Realizar</b></h2>
        </div>
        <ul class="list-unstyled">
              <li class="media">
                    <div class="media-body"> 
                    <h3 class="mt-1 mb-1">Crear perfil de prospecto</h3><br>
                    <a href="crear-prospecto.php"><img class="mr-3 col-sm" float:right; margin:10;  width="50"src="img/agregar contacto.png" alt="Crear Prospectos"></a>
                     Puedes crear los perfiles de los prospectos en el siguiente enlace: <a href="crear-prospecto.php">Crear Perfil</a>.
                    </div>
              </li>
              <li class="media my-4">
                    <div class="media-body">
                    <h3 class="mt-0 mb-1">Revisar base de prospectos</h3><br>
                    <a href="lista-prospectos.php"><img class="mr-3 col-sm" float:right; margin:10;  width="50"src="img/buscar.png" alt="Buscar Prospectos"></a>                  
                      Puedes ver y revisar los datos de perfiles de prospectos creados anteriormente con la finalidad de no duplicar datos.
                      Accede al panel de busqueda en el siguiente enlace: <a href="lista-prospectos.php">Buscar.</a>
                    </div>
              </li>              
        </ul>
        <br>        
        <div class="box-footer">
        <i><b>Nota:</b> Puedes hacer click en el enlace o la imagen.</i>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
        include_once 'templates/footer.php';
  ?>


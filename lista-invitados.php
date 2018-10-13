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
            Listado de Prospectos
            <small></small>
          </h1>
    </section>

   <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Administra la lista de prospectos y su información aquí</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Cedula Identidad</th>
                  <th>Ciudad</th>
                  <th>Foto</th>
                  <th>Observaciones</th>
                  <th>Dirección</th>
                  <th>Facebook</th>
                  <th>Twitter</th>
                  <?php if($_SESSION['nivel'] == 1): ?>
                  <th>Acciones</th>
                  <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                    <?php
                     try {
                        $sql = "SELECT id_general, nombre_prospecto, apellido_prospecto, cedula_prospecto, ciudad_prospecto, municipio_prospecto, barrio_prospecto, direccion_prospecto, foto_prospecto, observacion_prospecto, url_facebook, url_twitter  ";
                        $sql .= " FROM general_prospecto ";
                        $sql .= " INNER JOIN ubicacion_prospecto ";
                        $sql .= " ON general_prospecto.id_general=ubicacion_prospecto.id_gen_pro ";
                        $sql .= " INNER JOIN virtual_prospecto ";
                        $sql .= " ON general_prospecto.id_general=virtual_prospecto.id_vir_gen ";
                        $sql .= " ORDER BY id_general ";
                        $resultado = $conn->query($sql);                        
                     } catch (Exception $e) {
                        $error = $e->getMessage();
                        echo $error;
                     }      
                     while($prospectos = $resultado->fetch_assoc() ) { ?>
                      <tr>
                          <td><?php echo $prospectos['nombre_prospecto'] . " " . $prospectos['apellido_prospecto']; ?></td>
                          <td><?php echo $prospectos['cedula_prospecto']; ?></td>
                          <td><?php echo $prospectos['ciudad_prospecto']; ?></td>
                          <td><?php echo $prospectos['foto_prospecto']; ?></td>
                          <td><?php echo $prospectos['observacion_prospecto']; ?></td>
                          <td><?php echo $prospectos['municipio_prospecto'] . " | " . $prospectos['barrio_prospecto'] . " | " . $prospectos['direccion_prospecto']; ?></td>
                          <td><?php echo $prospectos['url_facebook']; ?></td>
                          <td><?php echo $prospectos['url_twitter']; ?></td>
                          <?php if($_SESSION['nivel'] == 1): ?>
                          <td>
                            <a href="editar-evento.php?id=<?php echo $prospectos['id_general']; ?>" class="btn bg-orange btn-flat margin ">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <a href="#" data-id="<?php echo $prospectos['id_general']; ?>" data-tipo="evento" class="btn bg-maroon btn-flat margin borrar_registro">
                              <i class="fa fa-trash"></i>
                            </a>
                          </td>
                          <?php endif; ?>
                      </tr>
                 <?php } ?>               
                </tbody>
                <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Cedula Identidad</th>
                  <th>Ciudad</th>
                  <th>Foto</th>
                  <th>Observaciones</th>
                  <th>Dirección</th>
                  <th>Facebook</th>
                  <th>Twitter</th>
                  <?php if($_SESSION['nivel'] == 1): ?>
                  <th>Acciones</th>
                  <?php endif; ?>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
        include_once 'templates/footer.php';
  ?>


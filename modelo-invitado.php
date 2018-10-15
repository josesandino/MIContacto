<?php
include_once 'funciones/funciones.php';

$nombre = $_POST['nombre_invitado'];
$apellido = $_POST['apellido_invitado'];
$cedula = $_POST['cedula_prospecto'];
$ciudad = $_POST['ciudad_prospecto'];
$municipio = $_POST['municipio_prospecto'];
$colonia = $_POST['colonia_prospecto'];
$direccion = $_POST['direccion_prospecto'];
$comentario = $_POST['biografia_invitado'];
$facebook = $_POST['facebook_url'];
$twitter = $_POST['twitter_url'];



if($_POST['registro'] == 'nuevo') { 

       /*
       $respuesta = array(
           'post' => $_POST,
           'file' => $_FILES
       );
       die(json_encode($respuesta));
       */

       $directorio ="img/invitados/";

       if(!is_dir($directorio)) {
            mkdir($directorio, 0755, true);
       }

       if(move_uploaded_file($_FILES['archivo_imagen']['tmp_name'], $directorio.$_FILES['archivo_imagen']['name'])) {
           $imagen_url = $_FILES['archivo_imagen']['name'];
           $imagen_resultado = "Se subió correctamente";
       } else {
           $respuesta = array(
               'respuesta' => error_get_last()
           );
       }

    try {
        $sql = " INSERT INTO nombre_prospecto, apellido_prospecto, cedula_prospecto, ciudad_prospecto, municipio_prospecto, barrio_prospecto, direccion_prospecto, foto_prospecto, observacion_prospecto, url_facebook, url_twitter  ";
        $sql .= " FROM general_prospecto ";
        $sql .= " INNER JOIN ubicacion_prospecto ";
        $sql .= " ON general_prospecto.id_general=ubicacion_prospecto.id_gen_pro ";
        $sql .= " INNER JOIN virtual_prospecto ";
        $sql .= " ON general_prospecto.id_general=virtual_prospecto.id_vir_gen ";
        $sql .= " VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssssss", $nombre, $apellido, $cedula, $ciudad, $municipio, $colonia, $direccion, $imagen_url, $comentario, $facebook, $twitter );
        $stmt->execute();
        $id_insertado = $stmt->insert_id;     
        
        if($stmt->affected_rows) {
          $respuesta = array(
              'respuesta' => 'exito',
              'id_insertado' => $id_insertado,
              'resultado_imagen' => $imagen_resultado
          );
        } else {
          $respuesta = array(
              'respuesta' => 'error'
          );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' =>$e->getMessage()
        );
    }
    die(json_encode($respuesta));
}

if($_POST['registro'] == 'actualizar') {
   
    try {
        $stmt = $conn->prepare('UPDATE categoria_evento SET cat_evento = ?, icono = ?, editado = NOW() WHERE id_categoria = ? ');
        $stmt->bind_param('ssi', $nombre_categoria, $icono, $id_registro );
        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_actualizado' => $id_registro
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }

    die(json_encode($respuesta));
}

if($_POST['registro'] == 'eliminar') {
    $id_borrar = $_POST['id'];

    try {
        $stmt = $conn->prepare('DELETE FROM categoria_evento WHERE id_categoria = ? ');
        $stmt->bind_param('i', $id_borrar);
        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_eliminado' => $id_borrar
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));
}


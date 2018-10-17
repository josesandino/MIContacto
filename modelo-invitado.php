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
$telefono = $_POST['telefono_prospecto'];
$id_registro = $_POST['id_registro'];



if($_POST['registro'] == 'nuevo') { 

       /*
       $respuesta = array(
           'post' => $_POST,
           'file' => $_FILES
       );
       die(json_encode($respuesta));
       */

       $directorio ="img/prospectos/";

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
        $stmt = $conn->prepare("INSERT INTO prospecto (nombre_prospecto, apellido_prospecto, cedula_prospecto, foto_prospecto, observacion_prospecto, ciudad_prospecto, municipio_prospecto, barrio_prospecto, direccion_prospecto, url_facebook, url_twitter, telefono_prospecto, editado) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,NOW())");
        $stmt->bind_param("sssssssssssi",  $nombre, $apellido, $cedula, $imagen_url, $comentario, $ciudad, $municipio, $colonia, $direccion, $facebook, $twitter, $telefono);
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
    $directorio ="img/prospectos/";

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
        if($_FILES['archivo_imagen']['size'] > 0) {
            $stmt = $conn->prepare('UPDATE prospecto SET nombre_prospecto = ?, apellido_prospecto = ?, cedula_prospecto = ?, foto_prospecto = ?, observacion_prospecto = ?, ciudad_prospecto = ?, municipio_prospecto = ?, barrio_prospecto = ?, direccion_prospecto =?, url_facebook = ?, url_twitter = ?, telefono_prospecto =  ? , editado = NOW() WHERE id_prospecto = ? ');
            $stmt->bind_param('sssssssssssii', $nombre, $apellido, $cedula, $imagen_url, $comentario, $ciudad, $municipio, $colonia, $direccion, $facebook, $twitter, $telefono, $id_registro );
        } else {
            $stmt = $conn->prepare('UPDATE prospecto SET nombre_prospecto = ?, apellido_prospecto = ?, cedula_prospecto = ?, observacion_prospecto = ?, ciudad_prospecto = ?, municipio_prospecto = ?, barrio_prospecto = ?, direccion_prospecto =?, url_facebook = ?, url_twitter = ?, telefono_prospecto =  ? , editado = NOW() WHERE id_prospecto = ? ');
            $stmt->bind_param('ssssssssssii', $nombre, $apellido, $cedula, $comentario, $ciudad, $municipio, $colonia, $direccion, $facebook, $twitter, $telefono, $id_registro );
        }       
        $estado = $stmt->execute();
        
        if($estado == true) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_registro' => $id_registro
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
        $stmt = $conn->prepare('DELETE FROM prospecto WHERE id_prospecto = ? ');
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


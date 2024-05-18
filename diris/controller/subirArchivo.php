<?php
include_once '../model/conexion.php';
include_once '../model/m_subirArchivo.php';

// Comprobar si se ha cargado un archivo
if (isset($_FILES['archivo'])) {
    /* extract($_POST); */
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $oficina = $_POST['oficina'];
    $unidad = $_POST['unidad'];
    $anio = $_POST['anio'];

    // Definir la carpeta de destino
    $carpeta_destino = "../assets/docs/$oficina/$unidad/$anio/";

    // Verificar si la carpeta no existe antes de crearla
    if (!file_exists($carpeta_destino)) {
        // Crear la carpeta
        if (mkdir($carpeta_destino, 0777, true)) {
            echo 'La carpeta se creó correctamente.';
        } else {
            echo 'Hubo un error al crear la carpeta.';
            header("location: ../docsescaneados.php");
            exit;
        }
    } else {
        echo 'La carpeta ya existe.';
    }

    // Obtener el nombre y la extensión del archivo
    $nombre_archivo = basename($_FILES["archivo"]["name"]);
    $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));
    $nombre_cambio = $oficina . "_" . $unidad . "_" . $anio . '.' . $extension;

    // Validar la extensión del archivo
    if ($extension == "pdf" || $extension == "xlsx" || $extension == "docx") {

        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $carpeta_destino . $nombre_cambio)) {
            // Insertar la información del archivo en la base de datos
            subirArchivo($con, $nombre, $descripcion, $oficina, $unidad, $anio, $nombre_cambio);
            header("location: ../mostrar.php");
        } else {
            echo "<script language='JavaScript'>
            alert('Error al subir el archivo. ');
            location.assign('../docscaneados.php');
            </script>";
        }
    } else {
        echo "<script language='JavaScript'>
        alert('Solo se permiten archivos PDF, XLSX y DOCX.');
        location.assign('../docscaneados.php');
        </script>";
    }
}

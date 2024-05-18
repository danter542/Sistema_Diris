<?php
function subirArchivo($con, $nombre, $descripcion, $oficina, $unidad, $anio, $nombre_cambio){
    $sql = "INSERT INTO documento (nombre, descripcion, oficina, unidad, anio, documento) 
    VALUES ( '$nombre', '$descripcion', '$oficina', '$unidad', $anio, '$nombre_cambio')";
    $resultado = mysqli_query($con, $sql);
    if ($resultado) {
        return true;
    } else {
        return false;
    }
}
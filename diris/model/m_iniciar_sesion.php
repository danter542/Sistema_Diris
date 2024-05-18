<?php
function validarUsuario($con, $user, $pass){
    $sql = "SELECT id_usuario FROM acceso WHERE usuario = '$user' AND password = '$pass'";
    $respuesta = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($respuesta);

    $id_usuario = $row['id_usuario'];

    return $id_usuario;
}

function validarPermiso($con, $id){
    $sql = "SELECT id_permiso FROM usuario_permiso WHERE id_usuario = $id";
    $respuesta = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($respuesta);
    $id_permiso = $row['id_permiso'];

    return $id_permiso;
}
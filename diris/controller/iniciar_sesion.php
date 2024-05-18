<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "../model/conexion.php";
include_once "../model/m_iniciar_sesion.php";

session_start();

if (isset($_REQUEST['usuario']) && isset($_REQUEST['pass'])) {
    $user = $_REQUEST['usuario'];
    $pass = $_REQUEST['pass'];

    if ($user == '' || $pass == '') {
        header("location: ../index.php");
        exit;
    }

    $id_usuario = validarUsuario($con, $user, $pass);
    if ($id_usuario > 0) {
        $permiso = validarPermiso($con, $id_usuario);
    
        $_SESSION['permiso'] = $permiso;
        
        header("location: ../principal.php");
        exit;
    } else {
        /* header("location: ../index.php");
        exit; */
        echo "<script>
                alert('Usuario o contraseña incorrectos');
                window.location= '../index.php'
            </script>";
    }
} else {
    header("location: ../index.php");
}
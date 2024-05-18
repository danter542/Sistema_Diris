<?php
session_start();

$permiso = $_SESSION['permiso'];

$archivosdes = '100';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="assets/img/DIRIS-Lima-Norte-300x49.png" alt="logo">
            <img src="assets/img/images.png" alt="logo">
        </div>
        <div class="navegacion">
            <div class="nombre">
                <a href="principal.php">Diris - Lima Norte</a>
            </div>
            <nav class="nav">
                <div class="nav-items">
                    <div class="nav-close-btn"></div>
                    <a href="reginventario.php">Registro de inventario</a>
                    <a href="mostrar.php">Documentos escaneados</a>
                    
                    
                    
                    <a href="#">Usuarios</a>
                    
                </div>
            </nav>
            <div class="nav-menu-btn"></div>
        </div>
    </header>

    <section class="encabezado">
        <h1>Principal</h1>
        <p>Usuario | Tipo de usuario</p>
    </section>

    <!-- Tarjetas de información general -->
    <section class="informacion">
        <div class="card">
            <i class='bx bx-user'></i>
            <div class="info">
                <p>Usuarios activos</p>
                <p><span>25</span></p>
            </div>
        </div>
        <div class="card">
            <i class='bx bx-file'></i>
            <div class="info">
                <p>Documentos escaneados</p>
                <p><span>100</span></p>
            </div>
        </div>
        <div class="card">
            <i class='bx bx-cloud-download'></i>
            <div class="info">
                <p>Documentos descargados</p>
                <p><span><?php echo $archivosdes; ?></span></p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="copyright">
            <p>&copy; 2024 DIRIS. Todos los derechos reservados</p>
        </div>
    </footer>

</body>

</html>
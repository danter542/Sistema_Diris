<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/style2.css">

    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.6/datatables.min.css" rel="stylesheet">
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
              
            </nav>
            <div class="nav-menu-btn"></div>
        </div>
    </header> 
    
     <section class="register_docs">
     <a href="regscaneado.php">Registrar nuevo documento</a>
     </section>
    

    <table class="table table-bordered cell-border compact row-border ui celled table"  id="dataTable" width="90%" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Usuario</th>
                <th>Descripcion</th>
                <th>Oficina</th>
                <th>Unidad Funcional </th>
                <th>Año</th>
                <th>Descargar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "model/conexion.php";
            $consulta = mysqli_query($con, "SELECT * FROM docmt");
            while ($fila = mysqli_fetch_assoc($consulta)) :
            ?>
                <tr>
                    <td><?php echo $fila['id_documento']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['descripcion']; ?></td>
                    <td><?php echo $fila['oficina']; ?></td>
                    <td><?php echo $fila['unidad']; ?></td>
                    <td><?php echo $fila['anio']; ?></td>
                    <td>
                        <a href="#" class="btn btn-primary">
                            Descarga
                        </a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary">
                            Eliminar
                        </a>
                    </td>
                <?php endwhile; ?>

                <!-- ../includes/download.php?id= <?php //echo $fila['id']; ?> -->

                </tr>
        </tbody>
      
    </table>
    <footer class="footer">
        <div class="copyright">
            <p>&copy; 2024 DIRIS. Todos los derechos reservados</p>
        </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.6/datatables.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
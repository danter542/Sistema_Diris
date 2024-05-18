<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style2.css">
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
              
            </nav>
            <div class="nav-menu-btn"></div>
        </div>
    </header> 

  
<div class="containerr">
  <form action="controller/subirArchivoRg.php" method="POST" enctype="multipart/form-data">
    <label for="nombre" class="form-label">Usuario</label>
    <input type="text" id="nombre" name="nombre" class="form-control" value="Dante" required readonly>

    <label for="nombre" class="form-label">Descripcion</label>
    <input type="text" id="descripcion" name="descripcion" class="form-control" required>

    <select name="oficina" id="opciones" onchange="oficinaSeleccionada(this)" required>
      <option disabled selected=""> OFICINA</option>
      <option value="ABASTECIMIENTO">ABASTECIMIENTO </option>
      <option value="TESORERIA">TESORERIA</option>
      <option value="DIRECCION GENERAL">DIRECCION GENERAL</option>
    </select>

    <div id="campo_unidad"></div>

    <select id="anio" name="anio">
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
    </select>

    <input type="file" name="archivo" accept=".pdf,.docx,.xlsx,.xls">

    <button type="submit">Agregar</button>
  </form>
  </div>

  <!-- <select id="unidad">
    <option value="opcion1">Opción 1</option>
    <option value="opcion2">Opción 2</option>
    <option value="opcion3">Opción 3</option>
    <option value="opcion3">A</option>
  </select> -->
  <!-- <select id="anio">
    <option value="opcion1">2015</option>
    <option value="opcion2">2016</option>
    <option value="opcion3">2017</option>
    <option value="opcion3">2018</option>
    <option value="opcion3">2019</option>
    <option value="opcion3">2020</option>
    <option value="opcion3">2021</option>
    <option value="opcion3">2022</option>
    <option value="opcion3">2023</option>
    <option value="opcion3">2024</option>
  </select> -->

  <!-- <a href="/Ds/views//agregar.php"> AGREGAR </a> -->
  <footer class="footer">
        <div class="copyright">
            <p>&copy; 2024 DIRIS. Todos los derechos reservados</p>
        </div>
    </footer>
  <script>

    function oficinaSeleccionada(oficina) {
      var valor_oficina = oficina.value;

      let mostrar = document.getElementById("campo_unidad");
      let url = "obtenerUnidad.php";
      let formData = new FormData();

      formData.append('valor_oficina', valor_oficina);
      fetch(url, {
          method: "POST",
          body: formData
        }).then(response => response.json())
        .then(data => {
          mostrar.innerHTML = data;
        }).catch(err => console.log(err));
    }
  </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIRIS</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style2.css">
</head>
<body>
    <section class="login">
        <div class="login-content">
            <h1>Iniciar sesión</h1>
            <form action="controller/iniciar_sesion.php" method="get" class="login-form">
                <label for="user">Usuario</label>
                <input type="text" name="usuario" id="user" placeholder="Usuario" autocomplete="off">
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" id="pass" placeholder="Contraseña" autocomplete="off">
                <button type="submit">Iniciar sesión</button>
            </form>
        </div>
    </section>
</body>
</html>
<?php require 'controlador.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo3.css">
    <title>Registro de Usuario</title>
</head>
<body>
    <a href="../index.html"><button id="boton-regresar">< REGRESAR</button></a>
    <section id="fondo">
    <form action="" method="post" autocomplete="off">
        <h1 style="color: red;">Registro de Usuarios</h1>

        <label for="nombre">Nombre(s)</label><br>
        <input type="text" name="nombre" class="primer" pattern="[A-Za-z ]+" placeholder="Nombre" maxlength="35" minlength="2" required>

        <label for="apellido">Apellido(s)</label><br>
        <input type="text" name="apellido" class="primer" pattern="[A-Za-z ]+" placeholder="Apellido" maxlength="35" minlength="4" required>

        <label for="correo">Correo</label>
        <input type="email" name="correo" class="primer" placeholder="TuCorreo@example.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>


        <label for="contrasena">Contraseña</label>
        <input type="password" name="password" class="primer" placeholder="Contraseña" pattern="^[A-Za-z0-9!@#\$%\^\&*\)\(+=._-]+$" maxlength="30" minlength="6" required>

        <button type="submit" name="registro">Registro</button>
    </form>
</section>
</body>
</html>
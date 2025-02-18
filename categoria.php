<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artesanias alebrijes</title>
    <link rel="stylesheet" href="stylosArtesanias.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include 'session_check.php';
    ?>
<body>
    <header>
        <div id="banner">
            <img src="ima/logon.png">
            <h1> Bienvenidos <br>"Artesanias alebrije"</h1>
        </div>
    </header>

    <header>
        <ul class="menu">
            <li><a href="ARTESANIAS ALEBRIJES.php">Inicio</a></li>
            <li><a href="categoria.php">Categorías</a></li>
            <li><a href="producto.php">Productos</a></li>
            <li><a href="ticket.php">Ticket</a></li>
            <li><a href="logout.php">cerrar sesion</a></li>
            </ul>
    </header>
    <div class="formulario">
        <h1>Insertar Categoría</h1>
        <form id="form-validation" action="registrosCate.php" method="post" novalidate>
            <label for="nombre">Nombre de la Categoría:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese Nombre de la Categoría"
                   pattern="[A-Za-z0-9\s]+" 
                   title="Solo letras y números son permitidos" 
                   oninput="this.value = this.value.replace(/[^A-Za-z0-9\s]/g, '')" 
                   required>
            <div class="buttons">
                <button type="submit" name="action" value="insertar">Guardar</button>
                <button type="submit" name="action" value="visualizar">Visualizar</button>
             
            </div>
        </form>
    </div>
</body>
</html>

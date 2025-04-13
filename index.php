<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit;
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola <?php echo $usuario['nombre']; ?></h1>


    <a href="infoUsuario.php">Ver informacion usuario</a>
    <br>
    <a href="logout.php" class="btn btn-danger mt-3">Cerrar Sesión</a>
</body>
</html>
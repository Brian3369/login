<?php
include_once 'modelo/Conecction.php';
if(!empty($_POST['boton'])){
    $email = $_POST['email'];
    $password_hash = $_POST['password_hash'];

    if (empty($email) || empty($password_hash)) {
        echo "<p type='alert' class='alert alert-danger'>Por favor, complete todos los campos.</p>";
        return null;
    }

    $resultado = validarCredenciales($email, $password_hash);

    if ($resultado) {
        session_start();
        $_SESSION['usuario'] = $resultado;
        header("Location: index.php");
        exit;
    } else {
        echo "<p type='alert' class='alert alert-danger'>email o contraseñá incorrecta.</p>";
    }
}

function validarCredenciales($email, $password_hash){
    $conexion = new Conecction();
    $stmt = $conexion->getConnetion()->prepare("SELECT * FROM usuario WHERE email = :email AND password = :password_hash");

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password_hash', $password_hash);

    if ($stmt->execute()) {
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }else {
        echo "<p type='alert' class='alert alert-danger'>Error al ejecutar la consulta.</p>";
    }
    return null;
}
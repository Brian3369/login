<?php
include_once 'modelo/Conecction.php';

if(!empty($_POST['btnresgistro'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password_hash = $_POST['password'];

    if (empty($nombre) || empty($apellido) || empty($email) || empty($password_hash)) {
        echo "<p type='alert' class='alert alert-danger'>Por favor, complete todos los campos.</p>";
        return null;
    }

    if (emailExistente($email)) {
        echo "<p type='alert' class='alert alert-danger'>El email \"$email\" ya está registrado.</p>";
        return null;
    }

    $registro = regitrarUsuario($nombre, $apellido, $email, $password_hash);

    if ($registro) {
        echo "<p type='alert' class='alert alert-success'>Registro exitoso.</p>";
    } else {
        echo "<p type='alert' class='alert alert-danger'>Error en el registro.</p>";
    }

}else{
    echo "<p type='alert' class='alert alert-danger'>Por favor, complete todos los campos.</p>";
    return null;
}

function regitrarUsuario($nombre, $apellido, $email, $password_hash){
    $conexion = new Conecction();
    $stmt = $conexion->getConnetion()->prepare("INSERT INTO usuario (nombre, apellido, email, password) VALUES (:nombre, :apellido, :email, :password_hash)");
    
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password_hash', $password_hash);

    if ($stmt->execute()) {
        return true;
    }else {
        echo "<p type='alert' class='alert alert-danger'>Error al ejecutar la consulta.</p>";
    }
    return false;
}

function emailExistente($email){
    $conexion = new Conecction();
    $stmt = $conexion->getConnetion()->prepare("SELECT email FROM usuario WHERE email = :email");
    
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        return true;
    }else {
        echo "<p type='alert' class='alert alert-danger'>Error al ejecutar la consulta.</p>";
    }
    return true;
}
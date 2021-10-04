<?php
    session_start();
    require_once 'functions.php';

    $conexion = connect($server, $db, $user, $pass);

    if(!$conexion) {
        header('Location: ../index.php');
    }

    
    $state = $conexion->prepare("SELECT username, password FROM usuarios WHERE username=:username AND password=SHA2(:password, 256)");
    $state->execute(array(
        ':username'     => $_POST['username'],
        ':password'     => $_POST['password']
    ));
    
    $result = $state->fetch();
    
    if($result == false) {
        setcookie("msg", "No se pudo iniciar sesión", time()+2, "/");
        header("Location: ../login.php");
    } else {
        $_SESSION["username"] = $result["username"];
        header("Location: ../index.php");
    }
?>
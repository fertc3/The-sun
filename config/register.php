<?php
    require_once 'functions.php';

    $conexion = connect($server, $db, $user, $pass);

    if(!$conexion) {
        header('Location: ../index.php');
    }

    if($_POST["password"] != $_POST["password2"]) {
        setcookie("msg", "Las contraseñas no coinciden", time()+2, "/");
        header("Location: ../register.php");
    }

    else if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
        $check = @getimagesize($_FILES['profImg']['tmp_name']);

        if($check !== false) {
            $folder = '../img/profImg/';
            $archivo = $folder.$_FILES['profImg']['name'];
            move_uploaded_file($_FILES['profImg']['tmp_name'], $archivo);

            $state = $conexion->prepare("INSERT INTO usuarios (username, password, nombre, apellidos, rol, profImg) VALUES (:username, SHA2(:password, 256), :nombre, :apellidos, :rol, :profImg)");
            $state->execute(array(
                ':username'     => $_POST['username'],
                ':password'     => $_POST['password'],
                ':nombre'       => $_POST['nombre'],
                ':apellidos'    => $_POST['apellidos'],
                ':rol'          => 'Edit',
                ':profImg'      => $_FILES['profImg']['name']
            ));
        } else {
            $state = $conexion->prepare("INSERT INTO usuarios (username, password, nombre, apellidos, rol) VALUES (:username, SHA2(:password, 256), :nombre, :apellidos, :rol)");
            $state->execute(array(
                ':username'     => $_POST['username'],
                ':password'     => $_POST['password'],
                ':nombre'       => $_POST['nombre'],
                ':apellidos'    => $_POST['apellidos'],
                ':rol'          => 'Edit'
            ));
        }
        
        setcookie("msg", "Usuario creado correctamente", time()+2, "/");
        header("Location: ../login.php");
    }

    else {
        setcookie("msg", "Error al crear el usuario", time()+2, "/");
        header("Location: ../register.php");
    }
    
?>
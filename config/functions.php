<?php
    require 'config.php';


    function connect($srv, $db, $u, $p) {
        try {
            $con = new PDO("mysql:host=$srv;dbname=$db", $u, $p);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (PDOException $e) {
            return false;
        }
    }

?>
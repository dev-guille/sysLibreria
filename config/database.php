<?php
    $host = 'localhost';
    $db = 'libreriadb';
    $user = 'root';
    $pass = 'FullStack';

    try{
        $conexion = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
        /* echo "Conexión Exitosa"; */
    }
    catch(PDOException $error){
        echo "Error de conexión" . $error->getMessage();
        exit;
    }
?>
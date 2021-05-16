<?php
    //Conexión (MySQLi Object-Oriented)
    $servername = "localhost";
    $username   = "root";
    $password   = "";

    //Crear la conexion
    $conn = new MySQLi($servername, $username, $password);

    //Se checa la conexión
    if ($conn->connect_error) {
        die("La conexion fallo: ".$conn->connect_error);
    }else {
        //echo("La conexión fue exitosa.");
    }

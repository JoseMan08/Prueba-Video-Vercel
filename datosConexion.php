<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="albums";

    $conn=new mysqli($servername, $username,$password, $database);
    if($conn->connect_error){
        die('Conexion Fallida ' . $conn-> connect_error);
    }
?>
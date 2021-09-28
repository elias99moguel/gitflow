<?php
    $servername = "localhost";
    $database = "proyecto10cuatri";
    $username = 'root';
    $password = '';

    // Create connection
    $conexion = mysqli_connect($servername,$username,$password,$database)or die("error conexion");
    
    //echo "done";
?>
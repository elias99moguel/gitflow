<?php
    $host = "ec2-44-199-26-122.compute-1.amazonaws.com";
    $dbname = "d1ss2q41gd1kmr";
    $user = "lngjrmswgbdzhc";
    $port = "5432";
    $password = "84100a40eae650345c85fc831b4781176d6bcc93ea0b7e8da28a95cb9946ac87";

   

    try {
        $base_de_datos = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
        $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "Ocurrió un error con la base de datos: " . $e->getMessage();
    }

    // Create connection
    //$conexion = mysqli_connect($servername,$username,$port,$password,$database)or die("error conexion");
    //$conexion = new PDO("pgsql:servername=$servername;port=$port;database=$database",$username,$password)
    
    //echo "done";
?>
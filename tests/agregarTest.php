<?php

//use PHPUnit\framework\TestCase;



class CrudTest extends \PHPUnit\Framework\TestCase
{

	public function testAdd(){
		include "conexion.php";
		$nombre = "Andrea";
		$fecha = "02/11/2021";
		$correo = "andreaturriza@gmail.com";
		 $sentencia = $base_de_datos->prepare("INSERT INTO empresa (nombre, correo, fecha_i) VALUES  (?, ?, ?);");
   		$resultado = $sentencia->execute([$nombre, $correo, $fecha]); 
   		
		$this->assertTrue($resultado);		


	}

}
<?php 

class Conexion
{

 //CONEXIÓN A LA BASE DE DATOS
//--------------------------------------------	

	static public function conectarBase(){

		$bd =  new PDO("mysql:host=localhost;dbname=prueba","root","");

		$bd -> exec("set names utf8");

		return $bd;
	}
}
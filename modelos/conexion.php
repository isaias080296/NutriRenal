<?php
/*=============================================
GoMercadito Abigail Villanueva Tlazalo
            Isaias Galdino Gómez Duarte
            2018
=============================================*/	
class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=po1",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}
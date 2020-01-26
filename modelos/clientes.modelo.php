<?php
/*=============================================
GoMercadito Abigail Villanueva Tlazalo
            Isaias Galdino Gómez Duarte
            2018
=============================================*/	

require_once "conexion.php";

class ModeloClientes{

	/*=============================================
	CREAR CLIENTE
	=============================================*/

	static public function mdlIngresarCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, documento, email, telefono, direccion,cliente,nombreContacto,puestoCargo,emailcontacto,telefonofijocontacto,telefonocelularcontacto,comentarios) VALUES (:nombre, :documento, :email, :telefono, :direccion,:cliente, :nombreContacto,:puestoCargo, :emailcontacto, :telefonofijocontacto,:telefonocelularcontacto,:comentarios)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

	
		$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_INT);
		$stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_INT);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":cliente", $datos["cliente"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":nombreContacto", $datos["nombreContacto"], PDO::PARAM_STR);
		$stmt->bindParam(":puestoCargo", $datos["puestoCargo"], PDO::PARAM_STR);
		$stmt->bindParam(":emailcontacto", $datos["emailcontacto"], PDO::PARAM_STR);
		$stmt->bindParam(":telefonofijocontacto", $datos["telefonofijocontacto"], PDO::PARAM_STR);
		$stmt->bindParam(":telefonocelularcontacto", $datos["telefonocelularcontacto"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios", $datos["comentarios"], PDO::PARAM_STR);
		
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function mdlMostrarClientes($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	EDITAR CLIENTE
	=============================================*/
static public function mdlEditarCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, documento = :documento, email = :email, telefono = :telefono, direccion = :direccion, rfc= :rfc, cliente= :cliente , nombreContacto= :nombreContacto,puestoCargo= :puestoCargo, emailcontacto= :emailcontacto, telefonofijocontacto=:telefonofijocontacto,telefonocelularcontacto=:telefonocelularcontacto, comentarios=:comentarios WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_INT);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);
		$stmt->bindParam(":cliente", $datos["cliente"], PDO::PARAM_STR);
		$stmt->bindParam(":nombreContacto", $datos["nombreContacto"], PDO::PARAM_STR);
		$stmt->bindParam(":puestoCargo", $datos["puestoCargo"], PDO::PARAM_STR);
		$stmt->bindParam(":emailcontacto", $datos["emailcontacto"], PDO::PARAM_STR);
		$stmt->bindParam(":telefonofijocontacto", $datos["telefonofijocontacto"], PDO::PARAM_STR);
		$stmt->bindParam(":telefonocelularcontacto", $datos["telefonocelularcontacto"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios", $datos["comentarios"], PDO::PARAM_STR);
		
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function mdlEliminarCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR CLIENTE
	=============================================*/

	static public function mdlActualizarCliente($tabla, $item1, $valor1, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}
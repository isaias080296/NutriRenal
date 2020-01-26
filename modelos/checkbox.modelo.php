<?php


require_once "conexion.php";
class ModeloClinico{

/*=============================================
CREAR CLIENTE
=============================================*/

static public function mdlIngresarClinico($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(SU21, SD21, SCa21, SO21, SIA21, SG21, SB21, SC21,SP21, Paciente, Cita) VALUES (:SU21, :SD21, :SCa21, :SO21, :SIA21, :SG21, :SB21, :SC21,:SP21,:Paciente, :Cita)");

    $stmt->bindParam(":Paciente", $datos["Paciente"], PDO::PARAM_STR);


    $stmt->bindParam(":Cita", $datos["Cita"], PDO::PARAM_STR);
    $stmt->bindParam(":SU21", $datos["SU21"], PDO::PARAM_STR);
    $stmt->bindParam(":SD21", $datos["SD21"], PDO::PARAM_STR);
    $stmt->bindParam(":SB21", $datos["SB21"], PDO::PARAM_STR);
    $stmt->bindParam(":SCa21", $datos["SCa21"], PDO::PARAM_STR);
    $stmt->bindParam(":SO21", $datos["SO21"], PDO::PARAM_STR);
    $stmt->bindParam(":SG21", $datos["SG21"], PDO::PARAM_STR);
    $stmt->bindParam(":SP21", $datos["SP21"], PDO::PARAM_STR);
    $stmt->bindParam(":SIA21", $datos["SIA21"], PDO::PARAM_STR);
    $stmt->bindParam(":SC21", $datos["SC21"], PDO::PARAM_STR);
  
  

    if($stmt->execute()){

        return "ok";

    }else{

        return "error";
    
    }

    $stmt->close();
    $stmt = null;

}


/*=============================================
MOSTRAR CATEGORIAS
=============================================*/

static public function mdlMostrarClinicos($tabla, $item, $valor){

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
EDITAR CATEGORIA
=============================================*/

static public function mdlEditarCategoria($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET categoria = :categoria WHERE id = :id");

    $stmt -> bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
    $stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        return "error";
    
    }

    $stmt->close();
    $stmt = null;

}

/*=============================================
BORRAR CATEGORIA
=============================================*/

static public function mdlBorrarCategoria($tabla, $datos){

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

}
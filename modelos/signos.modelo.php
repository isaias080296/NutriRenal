<?php


require_once "conexion.php";
class ModeloSigno{

/*=============================================
CREAR CLIENTE
=============================================*/

static public function mdlIngresarSigno($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Si, Di, Dia, Bo, Ax, InL, Re, Ca,Ra, Axi,Bro, Femu, O ,Cita,Paciente) VALUES (:Si, :Di, :Dia, :Bo, :Ax, :InL, :Re, :Ca,:Ra, :Axi,:Bro, :Femu, :O ,:Cita,:Paciente)");

    $stmt->bindParam(":Paciente", $datos["Paciente"], PDO::PARAM_STR);


    $stmt->bindParam(":Cita", $datos["Cita"], PDO::PARAM_STR);
    $stmt->bindParam(":Si", $datos["Si"], PDO::PARAM_STR);
    $stmt->bindParam(":Di", $datos["Di"], PDO::PARAM_STR);
    $stmt->bindParam(":Dia", $datos["Dia"], PDO::PARAM_STR);
    $stmt->bindParam(":Bo", $datos["Bo"], PDO::PARAM_STR);
    $stmt->bindParam(":Ax", $datos["Ax"], PDO::PARAM_STR);
    $stmt->bindParam(":InL", $datos["In"], PDO::PARAM_STR);
    $stmt->bindParam(":Re", $datos["Re"], PDO::PARAM_STR);
    $stmt->bindParam(":Ca", $datos["Ca"], PDO::PARAM_STR);
    $stmt->bindParam(":Ra", $datos["Ra"], PDO::PARAM_STR);
    $stmt->bindParam(":Axi", $datos["Axi"], PDO::PARAM_STR);
    $stmt->bindParam(":Bro", $datos["Bro"], PDO::PARAM_STR);
    $stmt->bindParam(":Femu", $datos["Femu"], PDO::PARAM_STR);
    $stmt->bindParam(":O", $datos["O"], PDO::PARAM_STR);
  
  

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

static public function mdlMostrarCategorias($tabla, $item, $valor){

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
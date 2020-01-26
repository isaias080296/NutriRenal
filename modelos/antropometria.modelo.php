<?php


require_once "conexion.php";
class ModeloAntropometria{

/*=============================================
CREAR CLIENTE
=============================================*/

static public function mdlIngresarAntropometria($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(AB1, AB2, AB3, AB4, AB5, AB6 ,AB7 ,AB8, AB11, AB22, AB33, AB44, AB55, AB66, AB77, AP1, AP2, AP3, AP4, AP5, AP6, AP7, AP8, AP9, AP10, AP11, AP12, AP13, AP14, AD1, AD2, AD3, AD4, AD5, AD6, AD8, AD9, AD10, AD11, Paciente, Cita ) VALUES (:AB1, :AB2, :AB3, :AB4, :AB5, :AB6, :AB7, :AB8, :AB11, :AB22, :AB33,:AB44, :AB55, :AB66, :AB77, :AP1, :AP2, :AP3, :AP4, :AP5, :AP6, :AP7, :AP8, :AP9, :AP10, :AP11, :AP12, :AP13, :AP14, :AD1, :AD2, :AD3, :AD3, :AD5, :AD6, :AD7, :AD8, :AD9, :AD10, :AD11, Paciente, Cita )");




    $stmt->bindParam(":AB1", $datos["AB1"], PDO::PARAM_STR);
    $stmt->bindParam(":AB2", $datos["AB2"], PDO::PARAM_STR);
    $stmt->bindParam(":AB3", $datos["AB3"], PDO::PARAM_STR);
    $stmt->bindParam(":AB4", $datos["AB4"], PDO::PARAM_STR);
    $stmt->bindParam(":AB5", $datos["AB5"], PDO::PARAM_STR);
    $stmt->bindParam(":AB6", $datos["AB6"], PDO::PARAM_STR);
    $stmt->bindParam(":AB7", $datos["AB7"], PDO::PARAM_STR);
    $stmt->bindParam(":AB8", $datos["AB8"], PDO::PARAM_STR);

    $stmt->bindParam(":Paciente", $datos["Paciente"], PDO::PARAM_STR);
    $stmt->bindParam(":Cita", $datos["Cita"], PDO::PARAM_STR);

    $stmt->bindParam(":AB11", $datos["AB11"], PDO::PARAM_STR);
    $stmt->bindParam(":AB22", $datos["AB22"], PDO::PARAM_STR);
    $stmt->bindParam(":AB33", $datos["AB33"], PDO::PARAM_STR);
    $stmt->bindParam(":AB44", $datos["AB44"], PDO::PARAM_STR);
    $stmt->bindParam(":AB55", $datos["AB55"], PDO::PARAM_STR);
    $stmt->bindParam(":AB66", $datos["AB66"], PDO::PARAM_STR);
    $stmt->bindParam(":AB77", $datos["AB77"], PDO::PARAM_STR);

    $stmt->bindParam(":AP1", $datos["AP1"], PDO::PARAM_STR);
    $stmt->bindParam(":AP2", $datos["AP2"], PDO::PARAM_STR);
    $stmt->bindParam(":AP3", $datos["AP3"], PDO::PARAM_STR);
    $stmt->bindParam(":AP4", $datos["AP4"], PDO::PARAM_STR);
    $stmt->bindParam(":AP5", $datos["AP5"], PDO::PARAM_STR);
    $stmt->bindParam(":AP6", $datos["AP6"], PDO::PARAM_STR);
    $stmt->bindParam(":AP7", $datos["AP7"], PDO::PARAM_STR);
    $stmt->bindParam(":AP8", $datos["AP8"], PDO::PARAM_STR);
    $stmt->bindParam(":AP9", $datos["AP9"], PDO::PARAM_STR);
    $stmt->bindParam(":AP10", $datos["AP10"], PDO::PARAM_STR);
    $stmt->bindParam(":AP11", $datos["AP11"], PDO::PARAM_STR);
    $stmt->bindParam(":AP12", $datos["AP12"], PDO::PARAM_STR);
    $stmt->bindParam(":AP13", $datos["AP13"], PDO::PARAM_STR);
    $stmt->bindParam(":AP14", $datos["AP14"], PDO::PARAM_STR);

    $stmt->bindParam(":AD1", $datos["AD1"], PDO::PARAM_STR);
    $stmt->bindParam(":AD2", $datos["AD2"], PDO::PARAM_STR);
    $stmt->bindParam(":AD3", $datos["AD3"], PDO::PARAM_STR);
    $stmt->bindParam(":AD4", $datos["AD4"], PDO::PARAM_STR);
    $stmt->bindParam(":AD5", $datos["AD5"], PDO::PARAM_STR);
    $stmt->bindParam(":AD6", $datos["AD6"], PDO::PARAM_STR);
    $stmt->bindParam(":AD7", $datos["AD7"], PDO::PARAM_STR);
    $stmt->bindParam(":AD8", $datos["AD8"], PDO::PARAM_STR);
    $stmt->bindParam(":AD9", $datos["AD9"], PDO::PARAM_STR);
    $stmt->bindParam(":AD10", $datos["AD10"], PDO::PARAM_STR);
    $stmt->bindParam(":AD11", $datos["AD11"], PDO::PARAM_STR);
    


   

 
    



    
    

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

static public function mdlMostrarAntropometria($tabla, $item, $valor){

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
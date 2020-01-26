<?php


require_once "conexion.php";
class ModeloBioquimicos{

/*=============================================
CREAR CLIENTE
=============================================*/

static public function mdlIngresarBioquimicos($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(B1, B2, B3, B4, B5, B6, B7, B8, B9, B10, B11, B12, B13, B14, B15, B16, B17, B18, B19, B20, B21, B22, B23, B24, B36, B37, B38, B39, B40, B41, B42, B43, B44, B45, B47, B48, Paciente, Cita ) VALUES (:B1, :B2, :B3, :B4, :B5, :B6, :B7, :B8, :B9, :B10, :B11, :B12, :B14, :B15, :B16, :B17, :B18, :B19, :B20, :B21, :B22, :B23, :B24, :B26,:B36, :B37, :B38, :B39, :B40, :B41, :B42, :B43, :B44, :B45, :B47, :B48, :Paciente, :Cita)");


    $stmt->bindParam(":Paciente", $datos["Paciente"], PDO::PARAM_STR);
    $stmt->bindParam(":Cita", $datos["Cita"], PDO::PARAM_STR);

    $stmt->bindParam(":B1", $datos["B1"], PDO::PARAM_STR);
    $stmt->bindParam(":B2", $datos["B2"], PDO::PARAM_STR);
    $stmt->bindParam(":B3", $datos["B3"], PDO::PARAM_STR);
    $stmt->bindParam(":B4", $datos["B4"], PDO::PARAM_STR);
    $stmt->bindParam(":B5", $datos["B5"], PDO::PARAM_STR);
    $stmt->bindParam(":B6", $datos["B6"], PDO::PARAM_STR);
    $stmt->bindParam(":B7", $datos["B7"], PDO::PARAM_STR);
    $stmt->bindParam(":B8", $datos["B8"], PDO::PARAM_STR);
    $stmt->bindParam(":B9", $datos["B9"], PDO::PARAM_STR);
    $stmt->bindParam(":B10", $datos["B10"], PDO::PARAM_STR);
    $stmt->bindParam(":B11", $datos["B11"], PDO::PARAM_STR);
    $stmt->bindParam(":B12", $datos["B12"], PDO::PARAM_STR);
    $stmt->bindParam(":B13", $datos["B13"], PDO::PARAM_STR);
    $stmt->bindParam(":B14", $datos["B14"], PDO::PARAM_STR);
    $stmt->bindParam(":B15", $datos["B15"], PDO::PARAM_STR);
    $stmt->bindParam(":B16", $datos["B16"], PDO::PARAM_STR);
    $stmt->bindParam(":B17", $datos["B17"], PDO::PARAM_STR);
    $stmt->bindParam(":B18", $datos["B18"], PDO::PARAM_STR);
    $stmt->bindParam(":B19", $datos["B19"], PDO::PARAM_STR);
    $stmt->bindParam(":B20", $datos["B20"], PDO::PARAM_STR);
    $stmt->bindParam(":B21", $datos["B21"], PDO::PARAM_STR);
    $stmt->bindParam(":B22", $datos["B22"], PDO::PARAM_STR);
    $stmt->bindParam(":B23", $datos["B23"], PDO::PARAM_STR);
    $stmt->bindParam(":B24", $datos["B24"], PDO::PARAM_STR);
    $stmt->bindParam(":B36", $datos["B36"], PDO::PARAM_STR);
    $stmt->bindParam(":B37", $datos["B37"], PDO::PARAM_STR);
    $stmt->bindParam(":B38", $datos["B38"], PDO::PARAM_STR);
    $stmt->bindParam(":B39", $datos["B39"], PDO::PARAM_STR);
    $stmt->bindParam(":B40", $datos["B40"], PDO::PARAM_STR);
    $stmt->bindParam(":B41", $datos["B41"], PDO::PARAM_STR); 
    $stmt->bindParam(":B42", $datos["B42"], PDO::PARAM_STR);
    $stmt->bindParam(":B43", $datos["B43"], PDO::PARAM_STR);
    $stmt->bindParam(":B44", $datos["B44"], PDO::PARAM_STR); 
    $stmt->bindParam(":B45", $datos["B45"], PDO::PARAM_STR);

    $stmt->bindParam(":B47", $datos["B47"], PDO::PARAM_STR);
    $stmt->bindParam(":B48", $datos["B48"], PDO::PARAM_STR);


   

 
    



    
    

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

static public function mdlMostrarBioquimicos($tabla, $item, $valor){

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
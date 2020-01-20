<?php


require_once "conexion.php";
class ModeloCapacidadF{

/*=============================================
CREAR CLIENTE
=============================================*/

static public function mdlIngresarCapacidadF($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Paciente, Cita, CF1, CF2, CF3, CF4, CF5, HC1, HC2, HC3, HC4, HC5, HC6, HC7, HC8, HC9,HC10, HC11,HC12, HC13, SG1, SG2, SG3, SG4, SG5, SG6, SG7, SG9,SG68, SH1, SU1, SF1, HA1, HA2, HA3, HA4, HA5, HA6, HA7, HA8, HA9, HA10, HA11, HA12, HA13, HA14, HA15, HA16, HA17, HA18, HA19, HA20, HA21, HA22, HA23, AF1, AF2, AF3, AF4, AF5, AF6, AF7, AF8, AF9, AF10, AF11) VALUES (:Paciente, :Cita, :CF1, :CF2,:CF3, :CF4, :CF5,  :HC1, :HC2, :HC3, :HC4, :HC5, :HC6, :HC7, :HC8, :HC9,:HC10, :HC11,:HC12, :HC13, :SG1, :SG2, :SG3, :SG4, :SG5, :SG6, :SG7, :SG9, :SG68, :SH1, :SU1, :SF1, :HA1, :HA2, :HA3, :HA4, :HA5, :HA6, :HA7, :HA8, :HA9, :HA10, :HA11, :HA12, :HA13, :HA14, :HA15, :HA16, :HA17, :HA18, :HA19, :HA20, :HA21, :HA22, :HA23, :AF1, :AF2, :AF3, :AF4, :AF5, :AF6, :AF7, :AF8, :AF9, :AF10, :AF11 )");

    $stmt->bindParam(":Paciente", $datos["Paciente"], PDO::PARAM_STR);


    $stmt->bindParam(":Cita", $datos["Cita"], PDO::PARAM_STR);
    $stmt->bindParam(":CF1", $datos["CF1"], PDO::PARAM_STR);
    $stmt->bindParam(":CF2", $datos["CF2"], PDO::PARAM_STR);
    $stmt->bindParam(":CF3", $datos["CF3"], PDO::PARAM_STR);
    $stmt->bindParam(":CF4", $datos["CF4"], PDO::PARAM_STR);
    $stmt->bindParam(":CF5", $datos["CF5"], PDO::PARAM_STR);
    $stmt->bindParam(":HC1", $datos["HC1"], PDO::PARAM_STR);
    $stmt->bindParam(":HC2", $datos["HC2"], PDO::PARAM_STR);
    $stmt->bindParam(":HC3", $datos["HC3"], PDO::PARAM_STR);
    $stmt->bindParam(":HC4", $datos["HC4"], PDO::PARAM_STR);
    $stmt->bindParam(":HC5", $datos["HC5"], PDO::PARAM_STR);
    $stmt->bindParam(":HC6", $datos["HC6"], PDO::PARAM_STR);
    $stmt->bindParam(":HC7", $datos["HC7"], PDO::PARAM_STR);
    $stmt->bindParam(":HC8", $datos["HC8"], PDO::PARAM_STR);
    $stmt->bindParam(":HC9", $datos["HC9"], PDO::PARAM_STR);
    $stmt->bindParam(":HC10", $datos["HC10"], PDO::PARAM_STR);
    $stmt->bindParam(":HC11", $datos["HC11"], PDO::PARAM_STR);
    $stmt->bindParam(":HC12", $datos["HC12"], PDO::PARAM_STR);
    $stmt->bindParam(":HC13", $datos["HC13"], PDO::PARAM_STR);
    $stmt->bindParam(":SG1", $datos["SG1"], PDO::PARAM_STR);
    $stmt->bindParam(":SG2", $datos["SG2"], PDO::PARAM_STR);
    $stmt->bindParam(":SG3", $datos["SG3"], PDO::PARAM_STR);
    $stmt->bindParam(":SG4", $datos["SG4"], PDO::PARAM_STR);
    $stmt->bindParam(":SG5", $datos["SG5"], PDO::PARAM_STR);
    $stmt->bindParam(":SG6", $datos["SG6"], PDO::PARAM_STR);
    $stmt->bindParam(":SG7", $datos["SG7"], PDO::PARAM_STR);
    $stmt->bindParam(":SG68", $datos["SG68"], PDO::PARAM_STR);
    $stmt->bindParam(":SG9", $datos["SG9"], PDO::PARAM_STR);
    $stmt->bindParam(":SH1", $datos["SH1"], PDO::PARAM_STR);
    $stmt->bindParam(":SU1", $datos["SU1"], PDO::PARAM_STR);
    $stmt->bindParam(":SF1", $datos["SF1"], PDO::PARAM_STR);
    $stmt->bindParam(":HA1", $datos["HA1"], PDO::PARAM_STR);
    $stmt->bindParam(":HA2", $datos["HA2"], PDO::PARAM_STR);
    $stmt->bindParam(":HA3", $datos["HA3"], PDO::PARAM_STR);
    $stmt->bindParam(":HA4", $datos["HA4"], PDO::PARAM_STR);
    $stmt->bindParam(":HA5", $datos["HA5"], PDO::PARAM_STR);
    $stmt->bindParam(":HA6", $datos["HA6"], PDO::PARAM_STR);
    $stmt->bindParam(":HA7", $datos["HA7"], PDO::PARAM_STR);
    $stmt->bindParam(":HA8", $datos["HA8"], PDO::PARAM_STR);
    $stmt->bindParam(":HA9", $datos["HA9"], PDO::PARAM_STR);
    $stmt->bindParam(":HA10", $datos["HA10"], PDO::PARAM_STR);
    $stmt->bindParam(":HA11", $datos["HA11"], PDO::PARAM_STR);
    $stmt->bindParam(":HA12", $datos["HA12"], PDO::PARAM_STR);
    $stmt->bindParam(":HA13", $datos["HA13"], PDO::PARAM_STR);
    $stmt->bindParam(":HA14", $datos["HA14"], PDO::PARAM_STR);
    $stmt->bindParam(":HA15", $datos["HA15"], PDO::PARAM_STR);
    $stmt->bindParam(":HA16", $datos["HA16"], PDO::PARAM_STR);
    $stmt->bindParam(":HA17", $datos["HA17"], PDO::PARAM_STR);
    $stmt->bindParam(":HA18", $datos["HA18"], PDO::PARAM_STR);
    $stmt->bindParam(":HA19", $datos["HA19"], PDO::PARAM_STR);
    $stmt->bindParam(":HA20", $datos["HA20"], PDO::PARAM_STR);
    $stmt->bindParam(":HA21", $datos["HA21"], PDO::PARAM_STR);
    $stmt->bindParam(":HA22", $datos["HA22"], PDO::PARAM_STR);
    $stmt->bindParam(":HA23", $datos["HA23"], PDO::PARAM_STR);
    $stmt->bindParam(":AF1", $datos["AF1"], PDO::PARAM_STR);
    $stmt->bindParam(":AF2", $datos["AF2"], PDO::PARAM_STR);
    $stmt->bindParam(":AF3", $datos["AF3"], PDO::PARAM_STR);
    $stmt->bindParam(":AF4", $datos["AF4"], PDO::PARAM_STR);
    $stmt->bindParam(":AF5", $datos["AF5"], PDO::PARAM_STR);
    $stmt->bindParam(":AF6", $datos["AF6"], PDO::PARAM_STR);
    $stmt->bindParam(":AF7", $datos["AF7"], PDO::PARAM_STR);
    $stmt->bindParam(":AF8", $datos["AF8"], PDO::PARAM_STR);
    $stmt->bindParam(":AF9", $datos["AF9"], PDO::PARAM_STR);
    $stmt->bindParam(":AF10", $datos["AF10"], PDO::PARAM_STR);
    $stmt->bindParam(":AF11", $datos["AF11"], PDO::PARAM_STR);
    

    



    
    

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
<?php

class ControladorCapacidadF{

/*=============================================
CREAR CITA CAPACIDAD FUNCIONAL
=============================================*/

static public function ctrCrearCapacidadF(){

    if(isset($_POST["Paciente"])){

        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["Paciente"]) ){

               $tabla = "capacidadf";

               $datos = array("Paciente"=>$_POST["Paciente"],
                           "Cita"=>$_POST["Cita"],
                           "CF1"=>$_POST["CF1"],
                           "CF2"=>$_POST["CF2"],
                           "CF3"=>$_POST["CF3"],
                           "CF4"=>$_POST["CF4"],
                           "CF5"=>$_POST["CF5"],
                           "HC1"=>$_POST["HC1"],
                           "HC2"=>$_POST["HC2"],
                           "HC3"=>$_POST["HC3"],
                           "HC4"=>$_POST["HC4"],
                           "HC12"=>$_POST["AAC"],
                           "HC5"=>$_POST["HC5"],
                           "HC6"=>$_POST["HC6"],
                           "HC7"=>$_POST["HC7"],
                           "HC8"=>$_POST["HC8"],
                           "HC9"=>$_POST["HC9"],
                           "HC10"=>$_POST["HC10"],
                           "HC11"=>$_POST["HC11"],
                           "HC13"=>$_POST["HC13"],
                           "SG1"=>$_POST["SG1"],
                           "SG2"=>$_POST["SGG2"],
                           "SG3"=>$_POST["SG3"],
                           "SG4"=>$_POST["SG4"],
                           "SG5"=>$_POST["SG5"],
                           "SG6"=>$_POST["SG6"],
                           "SG7"=>$_POST["SG7"],
                           "SG9"=>$_POST["SG9"],
                           "SG68"=>$_POST["SG8"],
                           "SU1"=> implode(",", $_POST["SU1"]),
                           "SH1"=> implode(",", $_POST["SH1"]),
                           "SF1"=> implode(",", $_POST["SF1"]),
                           "HA1"=>$_POST["HA1"],
                           "HA2"=>$_POST["HA2"],
                           "HA3"=>$_POST["HA3"],
                           "HA4"=>$_POST["HA4"],
                           "HA5"=>$_POST["HA5"],
                           "HA6"=>$_POST["HA6"],
                           "HA7"=>$_POST["HA7"],
                           "HA8"=>$_POST["HA8"],
                           "HA9"=>$_POST["HA9"],
                           "HA10"=>$_POST["HA10"],
                           "HA11"=>$_POST["HA11"],
                           "HA12"=>$_POST["HA12"],
                           "HA13"=>$_POST["HA13"],
                           "HA14"=>$_POST["HA14"],
                           "HA15"=>$_POST["HA15"],
                           "HA16"=>$_POST["HA16"],
                           "HA17"=>$_POST["HA17"],
                           "HA18"=>$_POST["HA18"],
                           "HA19"=>$_POST["HA19"],
                           "HA20"=>$_POST["HA20"],
                         
                           "HA22"=>$_POST["HA22"],

                           "HA23"=>$_POST["HA23"],
                           "HA21"=>$_POST["CAA"],

                           "AF1"=>$_POST["AF1"],
                           "AF2"=>$_POST["AF2"],
                           "AF3"=>$_POST["AF3"],
                           "AF4"=>$_POST["AF4"],
                           "AF5"=>$_POST["AF5"],
                           "AF6"=>$_POST["AF6"],
                           "AF7"=>$_POST["AF7"],
                           "AF8"=>$_POST["AF8"],
                           "AF9"=>$_POST["AF9"],
                           "AF10"=>$_POST["AF10"],
                           "AF11"=>$_POST["AF11"],
                       




                       
                   

                    

                           
                     
                       

                           );

               $respuesta = ModeloCapacidadF::mdlIngresarCapacidadF($tabla, $datos);

               if($respuesta == "ok"){

                echo'<script>

                swal({
                      type: "success",
                      title: "La ha sido guardado correctamente",
                      showConfirmButton: true,
                      confirmButtfonText: "Cerrar"
                      }).then(function(result){
                                if (result.value) {

                     

                                }
                            })

                </script>';

            }

        }else{

            echo'<script>

                swal({
                      type: "error",
                      title: "¡La cita no puede ir vacío o llevar caracteres especiales!",
                      showConfirmButton: true,
                      confirmButtonText: "Cerrar"
                      }).then(function(result){
                        if (result.value) {

                 

                        }
                    })

              </script>';



        }

    }

}


/*=============================================
MOSTRAR CATEGORIAS
=============================================*/

static public function ctrMostrarCategorias($item, $valor){

    $tabla = "categorias";

    $respuesta = ModeloCategorias::mdlMostrarCategorias($tabla, $item, $valor);

    return $respuesta;

}

/*=============================================
EDITAR CATEGORIA
=============================================*/

static public function ctrEditarCategoria(){

    if(isset($_POST["editarCategoria"])){

        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCategoria"])){

            $tabla = "categorias";

            $datos = array("categoria"=>$_POST["editarCategoria"],
                           "id"=>$_POST["idCategoria"]);

            $respuesta = ModeloCategorias::mdlEditarCategoria($tabla, $datos);

            if($respuesta == "ok"){

                echo'<script>

                swal({
                      type: "success",
                      title: "La categoría ha sido cambiada correctamente",
                      showConfirmButton: true,
                      confirmButtonText: "Cerrar"
                      }).then(function(result){
                                if (result.value) {

                                window.location = "categorias";

                                }
                            })

                </script>';

            }


        }else{

            echo'<script>

                swal({
                      type: "error",
                      title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
                      showConfirmButton: true,
                      confirmButtonText: "Cerrar"
                      }).then(function(result){
                        if (result.value) {

                        window.location = "categorias";

                        }
                    })

              </script>';

        }

    }

}

/*=============================================
BORRAR CATEGORIA
=============================================*/

static public function ctrBorrarCategoria(){

    if(isset($_GET["idCategoria"])){

        $tabla ="Categorias";
        $datos = $_GET["idCategoria"];

        $respuesta = ModeloCategorias::mdlBorrarCategoria($tabla, $datos);

        if($respuesta == "ok"){

            echo'<script>

                swal({
                      type: "success",
                      title: "La categoría ha sido borrada correctamente",
                      showConfirmButton: true,
                      confirmButtonText: "Cerrar"
                      }).then(function(result){
                                if (result.value) {

                                window.location = "categorias";

                                }
                            })

                </script>';
        }
    }
    
}
}


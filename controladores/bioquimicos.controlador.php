<?php

class ControladorBioquimicos{

/*=============================================
CREAR CITA CAPACIDAD FUNCIONAL
=============================================*/

static public function ctrCrearBioquimicos(){

    if(isset($_POST["AB1"])){

        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["B1"]) ){

               $tabla = "bioquimicos";

               $datos = array(
                "Paciente"=>$_POST["Paciente"],
                "Cita"=>$_POST["Cita"],
                "B1"=>$_POST["B1"],
                "B2"=>$_POST["B2"],
                "B3"=>$_POST["B3"],
                "B4"=>$_POST["B4"],
                "B5"=>$_POST["B5"],
                "B6"=>$_POST["B6"],
                "B7"=>$_POST["B7"],
                "B8"=>$_POST["B8"],
                "B9"=>$_POST["B9"],
                "B10"=>$_POST["B10"],
                "B11"=>$_POST["B11"],
                "B12"=>$_POST["B12"],
                "B13"=>$_POST["B13"],
                "B14"=>$_POST["B14"],
                "B15"=>$_POST["B15"],
                "B16"=>$_POST["B16"],
                "B17"=>$_POST["B17"],
                "B18"=>$_POST["B18"],
                "B19"=>$_POST["B19"],
                "B21"=>$_POST["B21"],
                "B22"=>$_POST["B22"],
                "B23"=>$_POST["B23"],
                "B24"=>$_POST["B24"],
                "B36"=>$_POST["B36"],
                "B37"=>$_POST["B37"],
                "B38"=>$_POST["B38"],
                "B39"=>$_POST["B39"],
                "B40"=>$_POST["B40"],
                "B41"=>$_POST["B41"],
                "B42"=>$_POST["B42"],
                "B43"=>$_POST["B43"],
                "B44"=>$_POST["B44"],
                "B45"=>$_POST["B45"],
   
                "B47"=>$_POST["B47"],
                "B48"=>$_POST["B48"],

                           );

               $respuesta = ModeloBioquimicos::mdlIngresarBioquimicos($tabla, $datos);

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

static public function ctrMostrarBiquimicos($item, $valor){

    $tabla = "bioquimicos";

    $respuesta = ModeloBioquimicos::mdlMostrarBioquimicos($tabla, $item, $valor);

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


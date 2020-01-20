<?php

class ControladorAntropometria{

/*=============================================
CREAR CITA CAPACIDAD FUNCIONAL
=============================================*/

static public function ctrCrearAntropometria(){

    if(isset($_POST["AB1"])){

        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["AB1"]) ){

               $tabla = "antropometria";

               $datos = array(
                           "AB1"=>$_POST["AB1"],
                           "AB2"=>$_POST["AB2"],
                           "AB3"=>$_POST["AB3"],
                           "AB4"=>$_POST["AB4"],
                           "AB5"=>$_POST["AB5"],
                           "AB6"=>$_POST["AB6"],
                           "AB7"=>$_POST["AB7"],
                           "AB8"=>$_POST["AB8"],

                           "AB11"=>$_POST["AB9"],
                           "AB22"=>$_POST["AB10"],
                           "AB33"=>$_POST["AB11"],
                           "AB44"=>$_POST["AB12"],
                           "AB55"=>$_POST["AB13"],
                           "AB66"=>$_POST["AB14"],
                           "AB77"=>$_POST["AB15"],

                           "AP1"=>$_POST["AP1"],
                           "AP2"=>$_POST["AP2"],
                           "AP3"=>$_POST["AP3"],
                           "AP4"=>$_POST["AP4"],
                           "AP5"=>$_POST["AP5"],
                           "AP6"=>$_POST["AP6"],
                           "AP7"=>$_POST["AP7"],
                           "AP8"=>$_POST["AP8"],
                           "AP9"=>$_POST["AP9"],
                           "AP10"=>$_POST["AP10"],
                           "AP11"=>$_POST["AP11"],
                           "AP12"=>$_POST["AP12"],
                           "AP13"=>$_POST["AP13"],
                           "AP14"=>$_POST["AP14"],


                           "AD1"=>$_POST["AD1"],
                           "AD2"=>$_POST["AD2"],
                           "AD3"=>$_POST["AD3"],
                           "AD4"=>$_POST["AD4"],
                           "AD5"=>$_POST["AD5"],
                           "AD6"=>$_POST["AD6"],
                           "AD7"=>$_POST["AD7"],
                           "AD8"=>$_POST["AD8"],
                           "AD9"=>$_POST["AD9"],
                           "AD10"=>$_POST["AD10"],
                           "AD11"=>$_POST["AD11"],

                           );

               $respuesta = ModeloAntropometria::mdlIngresarAntropometria($tabla, $datos);

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


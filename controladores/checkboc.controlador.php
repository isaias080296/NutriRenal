<?php

class ControladorClinicos{

/*=============================================
CREAR CITA CAPACIDAD FUNCIONAL
=============================================*/

static public function ctrCrearClinicos(){

    if(isset($_POST["Paciente"])){

        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["Paciente"]) ){

               $tabla = "clinico";

               $datos = array(
        
                "SU21"=> implode(",", $_POST["SU21"]),
                "SD21"=> implode(",", $_POST["SD21"]),
                "SCa21"=> implode(",", $_POST["SCa21"]),
                "SO21"=> implode(",", $_POST["S021"]),
                "SIA21"=> implode(",", $_POST["SIA21"]),
                "SG21"=> implode(",", $_POST["SG21"]),
                "SB21"=> implode(",", $_POST["SB21"]),
                "SC21"=> implode(",", $_POST["SC21"]),
                "SP21"=> implode(",", $_POST["SP21"]),
                "Paciente"=>$_POST["Paciente"],
                "Cita"=>$_POST["Cita"],

                           );

               $respuesta = ModeloClinico::mdlIngresarClinico($tabla, $datos);

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

static public function ctrMostrarClinicos($item, $valor){

    $tabla = "clinico";

    $respuesta = ModeloClinico::mdlMostrarClinicos($tabla, $item, $valor);

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


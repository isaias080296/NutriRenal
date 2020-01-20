<?php

class ControladorSignoss{

/*=============================================
CREAR CITA CAPACIDAD FUNCIONAL
=============================================*/

static public function ctrCrearSignoss(){

    if(isset($_POST["Paciente"])){

        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["Paciente"]) ){

               $tabla = "signos";

               $datos = array(
        
                "Paciente"=>$_POST["Paciente"],
                "Cita"=>$_POST["Cita"],
                "Si"=>$_POST["Si"],
                "Dia"=>$_POST["Dia"],
                "Di"=>$_POST["Di"],
                "Bo"=>$_POST["Bo"],
                "Ax"=>$_POST["Ax"],
                "In"=>$_POST["In"],
                "Re"=>$_POST["Re"],
                "Ax"=>$_POST["Ax"],
                "In"=>$_POST["In"],
                "Re"=>$_POST["Re"],
                "Ca"=>$_POST["Ca"],
                "Ra"=>$_POST["Ra"],
                "Axi"=>$_POST["Axi"],
                "Bro"=>$_POST["Bro"],
                "Femu"=>$_POST["Femu"],
                "O"=>$_POST["O"],



               

                           );

               $respuesta = ModeloSigno::mdlIngresarSigno($tabla, $datos);

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


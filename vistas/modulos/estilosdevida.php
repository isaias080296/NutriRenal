<?php

if($_SESSION["perfil"] == "Especial"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Estilos de Vida de Pacientes
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar clientes</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">
          
          Agregar cliente

        </button>
    
      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Cita</th>
           <th>Paciente</th>
           <th>Se Alimenta Solo</th>
           <th>Fatiga</th>
           <th>Capacidad para Trabajar</th>
           <th>He dejado de Trabajar</th> 
           <th>Actividades Fisicas</th>
           <th>Conoce temas relacionados con Nutrición</th>
           <th>Enfermedad Renal, Riesgos y Complicaciones</th>
           <th>Cual</th>
           <th>Modificaciones Dietéticas</th>
           <th>Medir Porciones</th>
           <th>Alimentos Altos en Fósforo</th>
           <th>Alimentos Bajos en Fósforo</th>
           <th>Alimentos Altos en Sodio</th>
           <th>Aliments Altos en Potasio</th>
           <th>Alimentos Bajos en Potasio</th>
           <th>Alimentos Altos en Calcio</th>
           <th>Alimentos Bajos en Calcio</th>
           <th>Actividades Fisicas</th>
           <th>Toleracia Via Oral</th>
           <th>Anorexia</th>
           <th>Vómito</th>
           <th>Náuseas</th>
           <th>Sensación de Plenitud y Saciedad Temprana</th>
           <th>Cambios en el Apetito</th>
           <th>Sed</th>
           <th>Problemas en comer los Alimentos</th>
           <th>Alteración en Gusto</th>
           <th>Ingresar Actividades Fisicas</th>
           <th>Sintomas de Uremia</th>
           <th>Sintomas de Fosfatemia</th>
           <th>Sintomas de Hipercalemia</th>
           <th>Recomendaciones Dietéticas Previas</th>
           <th>Desayuno</th>
           <th>Comida</th>
           <th>Colacion</th>
           <th>Cena</th>
           <th>Alimentación antes de terapia sustitutiva</th>
           <th>Ejemplo</th>
           <th>Alimentación Despues de la Terapia Sustitutiva</th>
           <th>Ejemplo</th>
           <th>¿Con quien come?</th>
           <th>¿Quien prepara los alimentos?</th>
           <th>Apego o Aversión a Ciertos Alimentos</th>
           <th>Cuales</th>
           <th>Consumo de Cafeina</th>
           <th>Tazas</th>
           <th>Consumo de Alcohol</th>
           <th>Frecuencia</th>
           <th>Consumo de Sal</th>
           <th>Consumo de Refresco</th>
           <th>Vasos</th>
           <th>Frecuencia</th>
           <th>Problemas en comer Alimentos</th>
           <th>Alteración en gusto</th>
           <th>Tipo de Actividad Fisica</th>
           <th>Duración en Horas</th>
           <th>Duración en Minutos</th>
           <th>Camina Distancias Cortas</th>
           <th>Tipo de Ejercicio</th>
           <th>Cuales</th>
           <th>Realiza Actividad de Tipo Laboral</th>
           <th>Ingresar Actividades Fisicas</th>
           <th>Realizar Actividades Fisicas Recreativas</th>
           <th>Cual</th>
           <th>Ingresar Actividades Fisicas</th>
         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $clientes = ControladorCapacidadF::ctrMostrarCapacidadf($item, $valor);

          foreach ($clientes as $key => $value) {
            

            echo '<tr>

                     <td>'.($key+1).'</td>

                    <td>'.$value["Paciente"].'</td>

                    <td>'.$value["Cita"].'</td>

                    <td>'.$value["CF1"].'</td>

                    <td>'.$value["CF2"].'</td>

                    <td>'.$value["CF3"].'</td>

                    <td>'.$value["CF4"].'</td>

                    <td>'.$value["CF5"].'</td>
                    <td>'.$value["HC1"].'</td>
                    <td>'.$value["HC2"].'</td>
                    <td>'.$value["HC3"].'</td>
                    <td>'.$value["HC4"].'</td>
                    <td>'.$value["HC5"].'</td>
                    <td>'.$value["HC6"].'</td>
                    <td>'.$value["HC7"].'</td>
                    <td>'.$value["HC8"].'</td>
                    <td>'.$value["HC9"].'</td>
                    <td>'.$value["HC10"].'</td>
                    <td>'.$value["HC11"].'</td>
                    <td>'.$value["HC12"].'</td>
                    <td>'.$value["HC13"].'</td>
                    <td>'.$value["SG1"].'</td>
                    <td>'.$value["SG2"].'</td>
                    <td>'.$value["SG3"].'</td>
                    <td>'.$value["SG4"].'</td>
                    <td>'.$value["SG5"].'</td>
                    <td>'.$value["SG6"].'</td>
                    <td>'.$value["SG68"].'</td>
                    <td>'.$value["SG68"].'</td>
                    <td>'.$value["SG9"].'</td>
                    <td>'.$value["SH1"].'</td>
                    <td>'.$value["SF1"].'</td>
                    <td>'.$value["SU1"].'</td>
                    <td>'.$value["HA1"].'</td>
                    <td>'.$value["HA2"].'</td>
                    <td>'.$value["HA3"].'</td>
                    <td>'.$value["HA4"].'</td>
                    <td>'.$value["HA5"].'</td>
                    <td>'.$value["HA6"].'</td>
                    <td>'.$value["HA7"].'</td>
                    <td>'.$value["HA8"].'</td>
                    <td>'.$value["HA9"].'</td>
                    <td>'.$value["HA10"].'</td>
                    <td>'.$value["HA11"].'</td>
                    <td>'.$value["HA12"].'</td>
                    <td>'.$value["HA13"].'</td>
                    <td>'.$value["HA14"].'</td>
                    <td>'.$value["HA15"].'</td>
                    <td>'.$value["HA16"].'</td>
                    <td>'.$value["HA17"].'</td>
                    <td>'.$value["HA18"].'</td>
                    <td>'.$value["HA19"].'</td>
                    <td>'.$value["HA20"].'</td>
                    <td>'.$value["HA21"].'</td>
                    <td>'.$value["HA22"].'</td>
                    <td>'.$value["HA23"].'</td>
                    <td>'.$value["AF1"].'</td>
                    <td>'.$value["AF2"].'</td>
                    <td>'.$value["AF3"].'</td>
                    <td>'.$value["AF4"].'</td>
                    <td>'.$value["AF5"].'</td>
                    <td>'.$value["AF6"].'</td>
                    <td>'.$value["AF7"].'</td>
                    <td>'.$value["AF8"].'</td>
                    <td>'.$value["AF9"].'</td>
                    <td>'.$value["AF10"].'</td>
                    <td>'.$value["AF11"].'</td>

                
                 

                    <td>

                      <div class="btn-group">
                          
                        <></i></button>';

                      if($_SESSION["perfil"] == "Administrador"){

                          echo '<button class="btn btn-danger btnEliminarCliente" id="'.$value["id"].'"><i class="fa fa-times"></i></button>';

                      }

                      echo '</div>  

                    </td>

                  </tr>';
          
            }

        ?>
   
        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre del Pacientes" required>

              </div>

            </div>

             <!-- Cliente de -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
              
                <select class="form-control input-lg" id="cliente" name="cliente" required>
                  <option value="">Diagnostico Medico</option>
               
                  <option value="Intamex">1</option>
                  <option value="Pancale">2</option>
                  <option value="Pancale">3</option>
                  <option value="MansionMex">4</option>
                  <option value="TecnoCompraz">5</option>
                </select>

            </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>

              </div>

            </div>

              <!-- RFC -->
            
     

            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

              </div>

            </div>

           <!--Botones despegables-->

            <!--Pagina Web -->

           <!--=====================================
               Información del Contacto
            ======================================-->

              <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Informacion del Acompañante</h4>

        </div>

        <!--Nombre del Contacto-->
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span> 

                <input type="text" class="form-control input-lg" name="nombreContacto" placeholder="Nombre del Contacto" required>

              </div>
            </div>

              <!--Puesto o Cargo-->
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-address-card"></i></span> 

                <input type="text" class="form-control input-lg" name="puestoCargo" placeholder="Parentesco" required>

              </div>

            </div>

              <!--email-->
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" name="emailcontacto" placeholder="Email" required>

              </div>

            </div>
             <!-- ENTRADA PARA EL TELÉFONO FIJO CONTACTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="telefonofijocontacto" placeholder="Telefono fijo" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>
            <!-- ENTRADA PARA EL TELÉFONO CELULAR CONTACTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="telefonocelularcontacto" placeholder="Telefono Celular" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>
              <!--Comentarios-->
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-commenting-o"></i></span> 

                <input type="text" class="form-control input-lg" name="comentarios" placeholder="Comentarios" required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cliente</button>

        </div>

      </form>

      <?php

        $crearCliente = new ControladorClientes();
        $crearCliente -> ctrCrearCliente();

      ?>

    </div>

  </div>

</div>

<!--=====================================
Datos de Estilo de Vida
======================================== -->

<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">

<div class="modal-content">

  <form role="form" method="post">

    <!--=====================================
    CABEZA DEL MODAL
    ======================================-->

    <div class="modal-header" style="background:#3c8dbc; color:white">

      <button type="button" class="close" data-dismiss="modal">&times;</button>

      <h4 class="modal-title">Agregar cliente</h4>

    </div>

    <!--=====================================
    CUERPO DEL MODAL
    ======================================-->

    <div class="modal-body">

      <div class="box-body">

        <!-- ENTRADA PARA EL NOMBRE -->
        
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-user"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre del Pacientes" required>

          </div>

        </div>

         <!-- Cliente de -->
        
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-th"></i></span>
          
            <select class="form-control input-lg" id="cliente" name="cliente" required>
              <option value="">Diagnostico Medico</option>
           
              <option value="Intamex">1</option>
              <option value="Pancale">2</option>
              <option value="Pancale">3</option>
              <option value="MansionMex">4</option>
              <option value="TecnoCompraz">5</option>
            </select>

        </div>

        </div>

        <!-- ENTRADA PARA EL DOCUMENTO ID -->
        
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-key"></i></span> 

            <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>

          </div>

        </div>

          <!-- RFC -->
        
 

        <!-- ENTRADA PARA EL EMAIL -->
        
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

            <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

          </div>

        </div>

        <!-- ENTRADA PARA EL TELÉFONO -->
        
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

          </div>

        </div>

        <!-- ENTRADA PARA LA DIRECCIÓN -->
        
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

          </div>

        </div>

       <!--Botones despegables-->

        <!--Pagina Web -->

       <!--=====================================
           Información del Contacto
        ======================================-->

          <div class="modal-header" style="background:#3c8dbc; color:white">

      <button type="button" class="close" data-dismiss="modal">&times;</button>

      <h4 class="modal-title">Informacion del Acompañante</h4>

    </div>

    <!--Nombre del Contacto-->
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span> 

            <input type="text" class="form-control input-lg" name="nombreContacto" placeholder="Nombre del Contacto" required>

          </div>
        </div>

          <!--Puesto o Cargo-->
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-address-card"></i></span> 

            <input type="text" class="form-control input-lg" name="puestoCargo" placeholder="Parentesco" required>

          </div>

        </div>

          <!--email-->
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

            <input type="text" class="form-control input-lg" name="emailcontacto" placeholder="Email" required>

          </div>

        </div>
         <!-- ENTRADA PARA EL TELÉFONO FIJO CONTACTO -->
        
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

            <input type="text" class="form-control input-lg" name="telefonofijocontacto" placeholder="Telefono fijo" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

          </div>

        </div>
        <!-- ENTRADA PARA EL TELÉFONO CELULAR CONTACTO -->
        
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

            <input type="text" class="form-control input-lg" name="telefonocelularcontacto" placeholder="Telefono Celular" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

          </div>

        </div>
          <!--Comentarios-->
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-commenting-o"></i></span> 

            <input type="text" class="form-control input-lg" name="comentarios" placeholder="Comentarios" required>

          </div>

        </div>

      </div>

    </div>

    <!--=====================================
    PIE DEL MODAL
    ======================================-->

    <div class="modal-footer">

      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

      <button type="submit" class="btn btn-primary">Guardar cliente</button>

    </div>

  </form>

  <?php

    $crearCliente = new ControladorClientes();
    $crearCliente -> ctrCrearCliente();

  ?>

</div>

</div>

</div>
</div>

<!--=====================================
MODAL EDITAR CLIENTE
======================================-->

<div id="modalEditarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Empresa</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarCliente" id="editarCliente" required>
                <input type="hidden" id="idCliente" name="idCliente">
              </div>

            </div>
  <!-- Cliente de -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
              
                <select class="form-control input-lg" id="editarempresa" name="editarempresa" required>
                  <option value="">Cliente de</option>
                  <option value="Intamex">Intamex</option>
                  <option value="Pancale">Pancale</option>
                  <option value="Pancale">MansionCan</option>
                  <option value="MansionMex">MansionMex</option>
                  <option value="TecnoCompraz">TecnoCompraz</option>
                </select>

            </div>

            </div>


            <!-- ENTRADA PARA EL DOCUMENTO ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="editarDocumentoId" id="editarDocumentoId" required>

              </div>

            </div>
                   <!-- ENTRADA PARA EL RFC-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarrfc" id="editarrfc" required>
               
              </div>

            </div>
  
          

            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion"  required>

              </div>

            </div>

          

       <!-- ENTRADA LA PAGINA WEB -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarpaginaweb" id="editarpaginaweb" required>
               
              </div>

            </div>

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Contacto</h4>

        </div>

         <!-- Editar Nombre del Contacto -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarnombrecontacto" id="editarnombrecontacto" required>
               
              </div>

            </div>

            <!-- Editar puesto o cargo del Contacto -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarpuestocontacto" id="editarpuestocontacto" required>
               
              </div>

            </div>

             <!-- Editar email del contacto -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" name="editaremailcontacto" id="editaremailcontacto" required>
               
              </div>

            </div>

                <!-- ENTRADA PARA EL TELÉFONO fijo contacto -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTelefonocontacto" id="editarTelefonocontacto" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

               <!-- ENTRADA PARA EL TELÉFONO celular contacto -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTelefonocelcontacto" id="editarTelefonocelcontacto" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- Editar comentario del contacto -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-commenting-o"></i></span> 

                <input type="text" class="form-control input-lg" name="editarcomentario" id="editarcomentario" required>
               
              </div>

            </div>



  
          </div>

a

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

      <?php

        $editarCliente = new ControladorClientes();
        $editarCliente -> ctrEditarCliente();

      ?>

    

    </div>

  </div>

</div>

<?php

  $eliminarCapacidadF = new ControladorCapacidadF();
  $eliminarCapacidadF -> ctrEliminarCapacidadF();

?>



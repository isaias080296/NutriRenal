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
      
      Administrar clientes
    
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

                
                 

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'"><i class="fa fa-pencil"></i></button>';

                      if($_SESSION["perfil"] == "Administrador"){

                          echo '<button class="btn btn-danger btnEliminarCliente" idCliente="'.$value["id"].'"><i class="fa fa-times"></i></button>';

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

  $eliminarCliente = new ControladorClientes();
  $eliminarCliente -> ctrEliminarCliente();

?>



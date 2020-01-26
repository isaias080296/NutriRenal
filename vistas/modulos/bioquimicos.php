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
      
     Bioquimicos Clientes
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Bioquimicos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

    

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Paciente</th>
           <th>Cita</th>
           <th>Sodio</th>
           <th>Calcio</th>
           <th>Potasio</th>
           <th>Fósforo</th>
           <th>Eritrocitos</th>
           <th>Concentración de Hemoglobina</th>
           <th>Hematocrito mg/dl 37-47</th>
           <th>Volumen Corpuscular Medio fl 90-99</th> 
           <th>Hemoglobina Corpuscular Medio fl 90-99</th>
           <th>Leucocitos k/NL</th>
           <th>Linfositos</th>
           <th>Eosinfolios</th>
           <th>Basófilos</th>
           <th>Neutrofilos segmentados</th>
           <th>Plaquetas</th>
           <th>Colesterol Total</th>
           <th>Colesterol HDL</th>
           <th>Colesterol LDL</th>
           <th>Colesterol VLDL</th>
           <th>Trigliceridos</th>
           <th>Lipidos total</th>
           <th>PH</th>
           <th>Proteinas</th>
           <th>Glucosa</th>
           <th>Bilirrubia</th>
           <th>Nitritos</th>
           <th>Cuerpos Cetonicos</th>
           <th>Hemoglobina</th>
           <th>Glucosa en ayuno</th>
           <th>Glucosa 1 hora despues de la ingesta</th>
           <th>Hemoglobina Glucosilada</th>
           <th>Creatina</th>
           <th>Ulea</th>
           <th>BUN</th>
           <th>Albumina</th>
         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $clientes = ControladorBioquimicos::ctrMostrarBiquimicos($item, $valor);

          foreach ($clientes as $key => $value) {
            

            echo '<tr>
                     <td>'.($key+1).'</td>
                    <td>'.$value["Paciente"].'</td>
                    <td>'.$value["Cita"].'</td>
                    <td>'.$value["B9"].'</td>
                    <td>'.$value["B10"].'</td>
                    <td>'.$value["B11"].'</td>
                    <td>'.$value["B12"].'</td>
                    <td>'.$value["B13"].'</td>
                    <td>'.$value["B14"].'</td>
                    <td>'.$value["B15"].'</td>
                    <td>'.$value["B16"].'</td>
                    <td>'.$value["B17"].'</td>
                    <td>'.$value["B18"].'</td>
                    <td>'.$value["B19"].'</td>
                    <td>'.$value["B20"].'</td>
                    <td>'.$value["B21"].'</td>
                    <td>'.$value["B22"].'</td>
                    <td>'.$value["B23"].'</td>
                    <td>'.$value["B24"].'</td>
                    <td>'.$value["B36"].'</td>
                    <td>'.$value["B37"].'</td>
                    <td>'.$value["B38"].'</td>
                    <td>'.$value["B39"].'</td>
                    <td>'.$value["B40"].'</td>
                    <td>'.$value["B41"].'</td>
                    <td>'.$value["B42"].'</td>
                    <td>'.$value["B43"].'</td>
                    <td>'.$value["B44"].'</td>
                    <td>'.$value["B45"].'</td>
                    <td>'.$value["B47"].'</td>
                    <td>'.$value["B48"].'</td>
                    <td>'.$value["B1"].'</td>
                    <td>'.$value["B2"].'</td>
                    <td>'.$value["B3"].'</td>
                    <td>'.$value["B4"].'</td>
                    <td>'.$value["B5"].'</td>
                    <td>'.$value["B6"].'</td>
                    <td>'.$value["B7"].'</td>   
                    <td>'.$value["B8"].'</td>     
                 
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
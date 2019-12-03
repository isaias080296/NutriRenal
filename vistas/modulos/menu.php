

<aside class="main-sidebar">
<!--=====================================
GoMercadito Abigail Villanueva Tlazalo 
            Isaías Galdino Gomez Duarte
            2018
  ======================================-->
	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>
			
			<li>

		
			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			echo '<li>

				<a href="categorias">

					<i class="fa fa-th"></i>
					<span>Calendario de Citas</span>

				</a>

			</li>

			<li>

				<a href="productos">

					<i class="fa fa-product-hunt"></i>
					<span>Equivalentes</span>

				</a>

			</li>
			
			<li>

			

			</li>
			<li>

			<a href="datos">

				<i class="fa fa-product-hunt"></i>
				<span>Mis Dietas</span>

			</a>

		</li>'
			;

		}

		/*=============================
		Mis Pacientes
		==============================*/

if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

echo '<li class="treeview">

	<a href="#">

		<i class="fa fa-list-ul"></i>
		
		<span>Mis Pacientes</span>
		
		<span class="pull-right-container">
		
			<i class="fa fa-angle-left pull-right"></i>

		</span>

	</a>

	<ul class="treeview-menu">
		
		<li>

		</a>

	
	  <a href="clientes">
							
	
	  <button class="btn btn-primary  btn-xs btn-block" data-toggle="modal" href="clientes">
          
	  Datos Generales

   </button>

  </a>


<button class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#miModal">
          
        Estilos de Vida

		</button>
		


	  <button class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#Antropometria">
          
	  Antropometría

	</button>



<button class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#Bioquimicos">
          
Bioquimicos

</button>
<button class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#Clinico">
          
Clínico

</button>



<button class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#modalAgregarCliente">
          
Signos Vitales

</button>

<button class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#modalAgregarCliente">
          
Dietas

</button>



<button class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#modalAgregarCliente">
          
Fotos del Paciente

</button>
		</li>

	</ul>

</li>';



}




		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li>

			

			</li>
			<li>

				<a href="clientes">

					<i class="fa fa-users"></i>
					<span>Calculo Automatico</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Pagos</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="ventas">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar Pagos</span>

						</a>

					</li>

					<li>

						<a href="crear-venta">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear Pago</span>

						</a>

					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						<a href="reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de Pagos</span>

						</a>

						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal">
						Abrir modal
					</button>

					</li>';



					}

				

				echo '</ul>

			</li>';



		}

		?>



		</ul>

	 </section>

</aside>


<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"> Datos de estilo de vida Subjetivos</h4>

</div>

<br>

<div class="input-group" >

&nbsp &nbsp&nbsp&nbsp&nbsp
<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#CapacidadFuncional">
          
		  Capacidad Funcional
 
	   </button>

    

	   &nbsp &nbsp&nbsp&nbsp&nbsp

<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#HabilidadesConocimientos">
          
		  Habilidades y Conocimiento
 
	   </button>

	   &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp 
	   <button class="btn btn-primary btn-primary" data-toggle="modal" data-target="#SintomasGastrointestinales">
          
		 Sintomas Gastrointestinales
 
	   </button>
 <br>
 <br>

 &nbsp &nbsp&nbsp&nbsp&nbsp

<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#Asociadosenfermedad">
   
   Factores Conductuales
 </button>
	    &nbsp&nbsp&nbsp  &nbsp &nbsp&nbsp&nbsp&nbsp

	   <button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#HabitosAlimentarios">
          
		  Habitos Alimentarios
  
		</button>

		&nbsp &nbsp&nbsp&nbsp&nbsp  &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#ActividadFisica">
   
  Actividad Fisica

 </button>

 <br>
 <br>
		&nbsp&nbsp&nbsp	&nbsp &nbsp&nbsp&nbsp&nbsp	&nbsp &nbsp&nbsp&nbsp&nbsp	&nbsp &nbsp&nbsp&nbsp&nbsp 	&nbsp &nbsp&nbsp&nbsp&nbsp	&nbsp &nbsp&nbsp&nbsp&nbsp 	&nbsp &nbsp&nbsp&nbsp&nbsp	&nbsp &nbsp&nbsp&nbsp&nbsp 	&nbsp &nbsp&nbsp&nbsp&nbsp	&nbsp &nbsp&nbsp&nbsp&nbsp
		<button class="btn btn-warning btn-primary " data-toggle="modal" data-target="#miModal">
          
		  Asociados con la Enfermedad
  
		</button>

		<br>
 <br>
      </div>

	  


	  <!---========================
	  Ha dejado de Trabajar
	  ============================-->


	 

	
		</div>
	</div>
</div>



<!--================================
         Bioquimicos
====================================-->
<div class="modal fade" id="Antropometria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"> Antropometría</h4>

</div>

<br>

<div class="input-group" >

&nbsp &nbsp&nbsp&nbsp&nbsp
<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#AntropometriaBasica">
          
		  Basico
 
	   </button>

    

	   &nbsp &nbsp&nbsp&nbsp&nbsp

<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#Bioimpedancia">
          
		 Bioimpedancia
 
	   </button>

	   &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp 
	   <button class="btn btn-primary btn-primary" data-toggle="modal" data-target="#Pliegues">
          
		 Pliegues
 
	   </button>
 <br>
 <br>

 &nbsp &nbsp&nbsp&nbsp&nbsp

<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#Perimetros">
   
   Perímetros
 </button>
	    &nbsp&nbsp&nbsp  &nbsp &nbsp&nbsp&nbsp&nbsp

	   <button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#Diamétros">
          
		Diamétros
  
		</button>

		&nbsp &nbsp&nbsp&nbsp&nbsp  &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


		<br>
 <br>
      </div>

	  


	  <!---========================
	  Ha dejado de Trabajar
	  ============================-->


	 

	
		</div>
	</div>
</div>







<!--============================

Datos Biquimicos 
==============================--->



<div class="modal fade" id="Bioquimicos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"> Bioquimicos</h4>

</div>

<br>

<div class="input-group" >

&nbsp &nbsp&nbsp&nbsp&nbsp
<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#Hematica">
          
		  Biometria Hemática
 
	   </button>

    

	   &nbsp &nbsp&nbsp&nbsp&nbsp

<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#Sanguinea">
          
		Quimica Sanguinea
 
	   </button>

	   &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp 
	   <button class="btn btn-primary btn-primary" data-toggle="modal" data-target="#Electrolitos">
          
	Electrolitos
 
	   </button>
 <br>
 <br>

 &nbsp &nbsp&nbsp&nbsp&nbsp

<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#Lipidos">
   
  Lípidos
 </button>
	    &nbsp&nbsp&nbsp  &nbsp &nbsp&nbsp&nbsp&nbsp

	   <button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#Orina">
          
	Orina
  
		</button>

		&nbsp &nbsp&nbsp&nbsp&nbsp  &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


		<br>
 <br>
      </div>
	
		</div>
	</div>
</div>




<!----------------->

<div class="modal fade" id="Bioquimicos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Bioquimicos</h4>

</div>

<br>

<div class="input-group" >

&nbsp &nbsp&nbsp&nbsp&nbsp
<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#CapacidadFuncional">
          
		  Bimetría Hermática
 
	   </button>

    

	   &nbsp &nbsp&nbsp&nbsp&nbsp

<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#Sanguinea">
          
		 Quimica Sanguinea
 
	   </button>

	   &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp 
	   <button class="btn btn-primary btn-primary" data-toggle="modal" data-target="#SintomasGastrointestinales">
          
		Electrolitos
 
	   </button>
 <br>
 <br>

 &nbsp &nbsp&nbsp&nbsp&nbsp

<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#Asociadosenfermedad">
   
   Lípidos
 </button>
	    &nbsp&nbsp&nbsp  &nbsp &nbsp&nbsp&nbsp&nbsp

	   <button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#HabitosAlimentarios">
          
		 Orina
  
		</button>

		&nbsp &nbsp&nbsp&nbsp&nbsp  &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<button class="btn btn-primary btn-primary " data-toggle="modal" data-target="#ActividadFisica">
   
  Actividad Fisica

 </button>

 <br>
 <br>
		&nbsp&nbsp&nbsp	&nbsp &nbsp&nbsp&nbsp&nbsp	&nbsp &nbsp&nbsp&nbsp&nbsp	&nbsp &nbsp&nbsp&nbsp&nbsp 	&nbsp &nbsp&nbsp&nbsp&nbsp	&nbsp &nbsp&nbsp&nbsp&nbsp 	&nbsp &nbsp&nbsp&nbsp&nbsp	&nbsp &nbsp&nbsp&nbsp&nbsp 	&nbsp &nbsp&nbsp&nbsp&nbsp	&nbsp &nbsp&nbsp&nbsp&nbsp
		<button class="btn btn-warning btn-primary " data-toggle="modal" data-target="#miModal">
          
		  Asociados con la Enfermedad
  
		</button>

		<br>
 <br>
      </div>

	  


	  <!---========================
	  Ha dejado de Trabajar
	  ============================-->


	 

	
		</div>
	</div>
</div>

<!--- ====================================
Capacidad Funcional
=========================================
-->

<div class="modal fade" id="CapacidadFuncional" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"> Capacidad Funcional</h4>

</div>

<br>

<div class="input-group" >


      </div>

	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AS" name="AS" required>
            <option value="">Se Alimenta Solo</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	
<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="Fa" name="Fa" required>
            <option value="">Fatiga</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="CA" name="CA" required>
            <option value="">Capacidad para Trabajar</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="NT" name="NT" required>
            <option value="">Ha dejado de Trabajar</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar Actividades Fisicas" required>

			</div>

			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>







<!--- ====================================
Habilidades y Conocimietos
=========================================
-->

<div class="modal fade" id="HabilidadesConocimientos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"> Habilidades y Conocimientos</h4>

</div>

<br>

<div class="input-group" >


      </div>

	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="TN" name="TN" required>
            <option value="">Conoce sobre temas relacionados con Nutrición</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	
<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="Fa" name="Fa" required>
            <option value="">Enfermedad Renal, Riesgos y Complicaciones</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>


	  <br>
	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="enfermedad" placeholder="Cual" required>

			</div>


<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="MD" name="MD" required>
            <option value="">Modificaciones Dietéticas</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="MP" name="MP" required>
            <option value="">Medir Porciones</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAF" name="AAF" required>
            <option value="">Alimentos Altos en Fósforo</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="ABF" name="ABF" required>
            <option value="">Alimentos Bajos en Fósforo</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAS" name="AAS" required>
            <option value="">Alimentos Altos en Sodio</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="ABS" name="ABS" required>
            <option value="">Alimentos Bajos en Sodio</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>


	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Alimentos Altos en Potasio</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="ABP" name="ABP" required>
            <option value="">Alimentos Bajos en Potasio</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAC" name="AAC" required>
            <option value="">Alimentos altos en Calcio</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="ABC" name="ABC" required>
            <option value="">Alimentos Bajos en Calcio</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>




	  <br>


			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>


<!--- ====================================
Sintomas Gastrointestinales
=========================================
-->

<div class="modal fade" id="SintomasGastrointestinales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Síntomas Gastrointestinales</h4>

</div>

<br>

<div class="input-group" >


      </div>

	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="TN" name="TN" required>
            <option value="">Tolerancia Vía Oral</option>
         
            <option value="Si">Dificultad para Masticar</option>
            <option value="No">Disgeusia</option>
			<option value="No">Gastroparecia</option>
          </select>

      </div>
	
<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="Fa" name="Fa" required>
            <option value="">Anorexia</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>


	


<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="MP" name="MP" required>
            <option value="">Vómito</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAF" name="AAF" required>
            <option value="">Náuseas</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="ABF" name="ABF" required>
            <option value="">Sensación de Plenitud y Saciedad Temprana</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAS" name="AAS" required>
            <option value="">Cambios en el Apetito</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="ABS" name="ABS" required>
            <option value="">Sed</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>


	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Problemas en Comer los Alimentos</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="ABP" name="ABP" required>
            <option value="">Alteración en Gusto</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	 



	  <br>


			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>


<!--- ====================================
Asociados a la enfermedad
=========================================
-->

<div class="modal fade" id="Asociadosenfermedad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Síntomas de Uremia</h4>

</div>

<br>

<div class="input-group" >


      </div>

	 
	  
	 

	  <!-- Disminución de la Temperatura , Comezón, Hipo-->

	 

	  <div class="custom-control custom-checkbox">


	  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
	<label class="custom-control-label" for="defaultUnchecked">Fatiga</label>
	
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Neuropatía</label>

&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Disminución de agudeza mental</label>
<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Anorexia y Nauseas</label>

&nbsp &nbsp&nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Disminución del sentido del gusto y Olfato</label>

<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Calambres</label>


&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Piernas inquietas</label>

&nbsp &nbsp &nbsp&nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Alteraciones de Sueño</label>

</div>

<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Síntomas de Fosfatemia</h4>

</div>


<br>

<div class="custom-control custom-checkbox">


&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Comezón</label>

&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Dolor Óseo</label>



	</div>
	<br>


	<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Síntomas de Hipercalemia</h4>

</div>


<br>

<div class="custom-control custom-checkbox">


&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Temblores</label>

 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Debilidad Muscular</label>


&nbsp &nbsp &nbsp&nbsp&nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Disnea</label>

<br>

&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Biadicardia</label>


&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Arritmia</label>

&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Náuseas</label>


<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Pulso Lento</label>

	</div>



	  <br>


			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>




<!--================================
Habitos Alimentarios
====================================
-->


<div class="modal fade" id="HabitosAlimentarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Habitos Alimentarios</h4>

</div>

<br>

<div class="input-group" >


      </div>

	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="TN" name="TN" required>
            <option value="">Recomendaciones Dietéticas Previas</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
		
          </select>

      </div>



	


<br>
<div class="modal-header" style="background:#3c8dbc; color:white">
<table class="egt">

  <tr>

    <td><div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Desayuno</h4>

</div>
<br>
<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="time" class="form-control input-lg" name="enfermedad" placeholder="Harario de Comida" required>

			</div></td>

    <td><div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Comida</h4>

</div>
<br>
<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="time" class="form-control input-lg" name="enfermedad" placeholder="Harario de Comida" required>

			</div></td>

    <td><div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Colacion</h4>

</div>
<br>
<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="time" class="form-control input-lg" name="enfermedad" placeholder="Harario de Comida" required>

			</div></td>

		

  </tr>

  <tr>

  <td></td>
    <td><div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Cena</h4>

</div>
<br>
<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="time" class="form-control input-lg" name="enfermedad" placeholder="Harario de Comida" required>

			</div></td>



  </tr>

</table>
	</div>

	


<br>

	

<div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Alimentación antes de terapia sustitutiva</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
<br>


<div class="input-group">
          
		  <span class="input-group-addon"><i class="fa fa-user"></i></span> 

		  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ejemplo" required>

		</div>
		<br>

	<div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Alimentación Despues de la Terapia Sustitutiva</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <br>

	
	  <div class="input-group">
          
		  <span class="input-group-addon"><i class="fa fa-user"></i></span> 

		  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ejemplo" required>

		</div>
		<br>

		<div class="input-group">
          
		  <span class="input-group-addon"><i class="fa fa-user"></i></span> 

		  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="¿Con quien come?" required>

		</div>




		<br>
		<div class="input-group">
          
		  <span class="input-group-addon"><i class="fa fa-user"></i></span> 

		  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="¿Quien Prepara los Alimentos?" required>

		</div>

		<br>

			<div class="input-group">
          
		  <span class="input-group-addon"><i class="fa fa-user"></i></span> 

		  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="¿Con quien come?" required>

		</div>

<br>
	<div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Apego o Aversión a Ciertos Alimentos</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
<br>

<div class="input-group">
          
		  <span class="input-group-addon"><i class="fa fa-user"></i></span> 

		  <input type="text" class="form-control input-lg" name="ApegoaCiertosAliemntos" placeholder="Cuales" required>

		</div>

		<br>

<div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Consumo de Cafeína</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	<br>

	<div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Tazas</option>
         
            <option value="Si">1</option>
            <option value="No">2</option>
			<option value="No">3</option>
			<option value="No">4</option>
			<option value="No">5</option>
			<option value="No">más de 6</option>
          </select>

      </div>

<br>

<div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Consumo de Alcohol</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>


<br>

	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Frecuencia</option>
         
            <option value="1/7">1/7</option>
			<option value="2/7">2/7</option>
			<option value="3/7">3/7</option>
			<option value="4/7">4/7</option>
			<option value="5/7">5/7</option>
			<option value="6/7">6/7</option>
			<option value="7/7">7/7</option>
            
          </select>
		  
      </div>
	  <br>
	  
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Consumo de Sal</option>
         
            <option value="Nada">Nada</option>
			<option value="Poco">Poco</option>
			<option value="Normal">Normal</option>
			<option value="Extra">Extra</option>
         
          </select>

      </div>

	<br>

	
	<div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>   
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Consumo de Refersco</option>
         
            <option value="Si">Si</option>
			<option value="No">No</option>
          </select>
      </div>


<br>

	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>   
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Vasos</option>
         
            <option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="Mas de 6">Mas de 6</option>
          </select>
      </div>

	  <br>

	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Frecuencia</option>
         
            <option value="1/7">1/7</option>
			<option value="2/7">2/7</option>
			<option value="3/7">3/7</option>
			<option value="4/7">4/7</option>
			<option value="5/7">5/7</option>
			<option value="6/7">6/7</option>
			<option value="7/7">7/7</option>
            
          </select>

      </div>

	  <br>

	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AAP" name="AAP" required>
            <option value="">Problemas en comer los Alimentos</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="ABP" name="ABP" required>
            <option value="">Alteración en Gusto</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	 



	  <br>


			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>




<!--================================================
           Actividad Fisica
=====================================================-->


<div class="modal fade" id="ActividadFisica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"> Activiada Física</h4>

</div>

<br>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Tipo" required>

			</div>
<br>
			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Duración Horas" required>

			</div>

			<br>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Duración Minutos" required>

			</div>
	
<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="Fa" name="Fa" required>
            <option value="">Camina Distancias Cortas</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="CA" name="CA" required>
            <option value="">Tipo de Ejercicior</option>
         
            <option value="Si">Anaerobio</option>
            <option value="No">Aerobio</option>
          </select>

      </div>

<br>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Cuales" required>

			</div>

<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="NT" name="NT" required>
            <option value="">Realiza Actividad de Tipo Laboral</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar Actividades Fisicas" required>

			</div>
			<br>


	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="NT" name="NT" required>
            <option value="">Realiza Actividad Fisica Recreativa</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <BR>

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Cual" required>

			</div>

	  <br>

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar Actividades Fisicas" required>

			</div>

			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>

<!---==============================
Antropometria Basico
====================================--------->


<div class="modal fade" id="Bioimpedancia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Bioimpedancia</h4>

</div>

<br>

<div class="input-group" >

      </div>
<br>
	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Estatura" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Grasas en Sección Superior %" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Grasa en Sección Inferior %" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Grasa Visceral (Roting)" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Masa libre de Grasa kg" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Masa Muscular  kg" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Óseo" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Edad Metabólica" required>

			</div>
			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>



<!----
==============================
Bioimpedancia Antropometría
============================-->


<div class="modal fade" id="Bioimpedancia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"> Basica</h4>

</div>

<br>

<div class="input-group" >


      </div>

	
<br>
	  

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Estatura" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Actual" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Habitual" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Teórico" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Predialisis" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Seco" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Corregido por eclema" required>

			</div>
			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>
<!--===============================-->

<!---==============================
Antropometria Pliegues
====================================--------->


<div class="modal fade" id="Pliegues" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Pligues</h4>

</div>

<br>

<div class="input-group" >

      </div>
<br>
	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Subescapular (mm)" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Triceps (mm)" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Biceps (mm)" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="LLeocrestal (mm)" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Supraíliaco (mm)" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Abdominal (mm)" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Muslo Frontal (mm)" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Pantorrilla Medial" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Axiliar Medial" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Pectoral" required>

			</div>
			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>



<!----
==============================
Bioimpedancia Antropometría
============================-->


<div class="modal fade" id="AntropometriaBasica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"> Basica</h4>

</div>

<br>

<div class="input-group" >


      </div>

	
<br>
	  

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Estatura" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Actual" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Habitual" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Teórico" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Predialisis" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Seco" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Peso Corregido por eclema" required>

			</div>
			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>
<!--===============================-->




<!--======================
Antropometría PERMÍMETROS
==============================-->

<div class="modal fade" id="Perimetros" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"> Perímetros</h4>

</div>

<br>

<div class="input-group" >


      </div>

	
<br>
	  

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Cafálico cm" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Cuello cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Mitad de Brazo Relajado cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Mitad de Brazo Contraido cm" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Antrbrazo cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Muñeca cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Meso esternal cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Umbilical cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Cintura cm" required>

			</div>
			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Cadera cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Muslo cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Muslo medio cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Pantorrilla cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Tobillo cm" required>

			</div>

			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>



<!-------->


<!--======================
Antropometría Diametros
==============================-->

<div class="modal fade" id="Diamétros" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Diamétros</h4>

</div>

<br>

<div class="input-group" >


      </div>

	
<br>
	  

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Briacromial cm" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Bi ileocrestal cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Longitud de Pie cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Transverso de tórax cm" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Antero posterior del Torax cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Bi Epicóndilo del Húmero cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Bi Estiloides de la Muñeca cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="BI Maleolar cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Transverso de Pie cm" required>

			</div>
			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Longitud de Manos cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Transverso de la Mano cm" required>

			</div>


			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>



<!---
Qumica Sanguinea
==============================-->

<div class="modal fade" id="Sanguinea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Quimica Sanguinea</h4>

</div>

<br>

<div class="input-group" >


      </div>

	
<br>
	  

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Glucosa en ayuno Valor mg/dl Rango 65-100" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Glucosa 1 Hora despues de la ingesta mg/dl 110-135" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Glucosa 2 horas despues de la ingesta mg/dl 70-120" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Hemoglobina glucosilada (HbAlc) % 5-6" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Creatina mg/dl 0.6 - 12" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ulea mg/dl 10-40" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="BUN mg/dl  6-20" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Albumina g/dl 35-5" required>

			</div>

		

			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>



<!-------->

<!----==========================
Bioquimicos Electrolitos
==============================-->

<div class="modal fade" id="Electrolitos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Electrolitos</h4>

</div>

<br>

<div class="input-group" >


      </div>

	
<br>
	  

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Sodio MEq/L 136 - 145" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Calcio mg/dl 9-11" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Potacio MEq/L 3.5 - 5.5" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Fósforo mg/dl 2.3 - 4.7" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Cloro MEq/L 95-105" required>

			</div>


			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>




<!----==========================
Biometría  Hemática
==============================-->

<div class="modal fade" id="Hematica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Biometría Hemática</h4>

</div>

<br>

<div class="input-group" >


      </div>

	
<br>
	  

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Eritrocitos M/NL  4.2 - 6.2" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Concentración de Hemoglobina g/dl 14-17" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Hematocrito mg/dl  37-47" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Volumen Corpuscular Medio fl 90-99" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Hemoglobina Corpuscular Medio fl 90-99" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Leucocitos k/NL 4.8- 11.8" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Linfoncitos %M  4-8" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Eosinfolios %E  0.5 - 4" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Basófilos  %B  0 - 1.5" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Neutrofilos segmentados %NS  60 - 65" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Plaquetas k/NL   150,000 a 400,000" required>

			</div>

			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>














<!----==========================
Lipidos
==============================-->

<div class="modal fade" id="Lipidos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Lípidos</h4>

</div>

<br>

<div class="input-group" >


      </div>

	
<br>
	  

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Colesterol total mg/dl 120 - 199" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Colesterol HDL mg/dl 50 - 60" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Colesterol LDL mg/dl 65 - 150" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Colesterol VLDL  mg/dl 5-40" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Triglicéridos mg/dl  90 - 160" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Lipidos Totales mg/dl 450 - 1000" required>

			</div>

		


		

			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>





<!----==========================
Orina
==============================-->

<div class="modal fade" id="Orina" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Orina</h4>

</div>

<br>

<div class="input-group" >


      </div>

	
<br>
	  

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="PH  mg/dl 5-7 " required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Proteinas  mg/dl 30-150" required>

			</div>

			<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="Fa" name="Fa" required>
            <option value="">Glucosa</option>
         
            <option value="Positivo">Positivo</option>
            <option value="Negativo">Negativo</option>
          </select>

      </div>

<br>


	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="Fa" name="Fa" required>
            <option value="">Bilirrubina</option>
         
            <option value="Positivo">Positivo</option>
            <option value="Negativo">Negativo</option>
          </select>

      </div>

<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="Fa" name="Fa" required>
            <option value="">Nitritos</option>
         
            <option value="Positivo">Positivo</option>
            <option value="Negativo">Negativo</option>
          </select>

      </div>



	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="Fa" name="Fa" required>
            <option value="">Cuerpos Cetonicos</option>
         
            <option value="Positivo">Positivo</option>
            <option value="Negativo">Negativo</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="Fa" name="Fa" required>
            <option value="">Hemoglobina </option>
         
            <option value="Positivo">Positivo</option>
            <option value="Negativo">Negativo</option>
          </select>

      </div>
		

			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>


<!--- ====================================
Clinico
=========================================
-->

<div class="modal fade" id="Clinico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Sístemas urinario</h4>

</div>

<br>

<div class="input-group" >


      </div>

	 
	  
	 

	  <!-- Disminución de la Temperatura , Comezón, Hipo-->

	 

	  <div class="custom-control custom-checkbox">


	  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
	<label class="custom-control-label" for="defaultUnchecked">Disuria</label>
	
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Dolor de Riñones</label>

&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Oliguria</label>
<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Pielonefritis</label>

&nbsp &nbsp&nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Poliuria</label>

<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Sindrome nefrotico</label>


&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Sindrome nefritico</label>

&nbsp &nbsp &nbsp&nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Litiasis</label>


&nbsp &nbsp &nbsp&nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Enfermedad Renal Agudo</label>


&nbsp &nbsp &nbsp&nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Enfermedad Renal Crónica</label>

&nbsp &nbsp &nbsp&nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Nefrosis</label>

&nbsp &nbsp &nbsp&nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Uretritis</label>


&nbsp &nbsp &nbsp&nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Enuresis</label>

&nbsp &nbsp &nbsp&nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Crititis</label>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Otro" required>

			</div>

</div>

<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Sistema Cardiovascular</h4>

</div>


<br>

<div class="custom-control custom-checkbox">


&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Angina de Pecho</label>

&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Antecedentes de Infarto</label>


&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Antecedentes de Infarto</label>



	</div>
	<br>


	<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Síntomas de Hipercalemia</h4>

</div>


<br>

<div class="custom-control custom-checkbox">


&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Temblores</label>

 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Debilidad Muscular</label>


&nbsp &nbsp &nbsp&nbsp&nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Disnea</label>

<br>

&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Biadicardia</label>


&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Arritmia</label>

&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Náuseas</label>


<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
<label class="custom-control-label" for="defaultUnchecked">Pulso Lento</label>

	</div>



	  <br>


			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

	
		</div>
	</div>
</div>

                  
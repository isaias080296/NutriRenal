 

<aside class="main-sidebar">

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
							
	
	  <button class="btn btn-primary  btn-xs btn-block" data-toggle="modal" href="estilodevida">
          
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



<button class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#SignosVitales">
          
Signos Vitales

</button>
<a href="antropometria">
<button class="btn btn-primary btn-xs btn-block" data-toggle="modal" href="antropometricos">
          
Informacion Antropometicos

</button>
</a>

<a href="clinicos">
<button class="btn btn-primary  btn-xs btn-block" data-toggle="modal" href="clinicos">
          
Información Clinicos

</button>

</a>
<a href="bioquimicos">
<button class="btn btn-primary  btn-xs btn-block" data-toggle="modal" href="bioquimicos">
Información Bioquimicos

</button>
</a>

<a href="signosvitales">
<button class="btn btn-primary  btn-xs btn-block" data-toggle="modal" href="signosvitales">
Información Signos Vitales

</button>
</a>
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
		<button class="btn btn-primary  btn-xs btn-block" data-toggle="modal" href="clientes">
          
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
          
		  Realizar Encuesta
 
	   </button>

    

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
	   <button class="btn btn-primary btn-primary" data-toggle="modal" data-target="#">
          
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


</form>
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

<div class="modal-dialog">

<div class="modal-content">

<form role="form" method="post">

	<!--=====================================
	CABEZA DEL MODAL
	======================================-->

	<div class="modal-header" style="background:#3c8dbc; color:white">

	  <button type="button" class="close" data-dismiss="modal">&times;</button>

	  <h4 class="modal-title">Agregar categoría</h4>

	</div>
<br>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

			  <select class="form-control input-lg" id="Cita" name="Cita" required>
				
				<option value="">Selecionar Cita</option>

				<?php

				$item = null;
				$valor = null;

				$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

				foreach ($categorias as $key => $value) {
				  
				  echo '<option value="'.$value["categoria"].'">'.$value["categoria"].'</option>';
				}

				?>

			  </select>

			</div>

<br>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

			  <select class="form-control input-lg" id="Paciente" name="Paciente" required>
				
				<option value="">Selecionar Nombre del Paciente</option>

				<?php

				$item = null;
				$valor = null;

				$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

				foreach ($clientes as $key => $value) {
				  
				  echo '<option value="'.$value["nombre"].'">'.$value["nombre"].'</option>';
				}

				?>

			  </select>

			</div>


<br>



<div class="input-group" >


      </div>

	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="CF1" name="CF1" required>
            <option value="">Se Alimenta Solo</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	
<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="CF2" name="CF2" required>
            <option value="">Fatiga</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="CF3" name="CF3" required>
            <option value="">Capacidad para Trabajar</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="CF4" name="CF4" required>
            <option value="">Ha dejado de Trabajar</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="CF5" name="CF5" placeholder="Ingresar Actividades Fisicas" required>

			</div>

			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="button" class="btn btn-primary  background-color: #8064A2" data-dismiss="HabilidadesConocimientos">Guardar Datos</button>
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
        
          <select class="form-control input-lg" id="HC1" name="HC1" required>
            <option value="">Conoce sobre temas relacionados con Nutrición</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	
<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HC2" name="HC2" required>
            <option value="">Enfermedad Renal, Riesgos y Complicaciones</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>


	  <br>
	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" name="HC3" placeholder="Cual" required>

			</div>


<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HC4" name="HC4" required>
            <option value="">Modificaciones Dietéticas</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HC5" name="HC5" required>
            <option value="">Medir Porciones</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HC6" name="HC6" required>
            <option value="">Alimentos Altos en Fósforo</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HC7" name="HC7" required>
            <option value="">Alimentos Bajos en Fósforo</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HC8" name="HC8" required>
            <option value="">Alimentos Altos en Sodio</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HC9" name="HC9" required>
            <option value="">Alimentos Bajos en Sodio</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>


	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HC10" name="HC10" required>
            <option value="">Alimentos Altos en Potasio</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HC11" name="HC11" required>
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
        
          <select class="form-control input-lg" id="HC13" name="HC13" required>
            <option value="">Alimentos Bajos en Calcio</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <br>

<div class="input-group">
		
		<span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

		<input type="text" class="form-control input-lg"  id="CF5" name="CF5" placeholder="Ingresar Actividades Fisicas" required>

	  </div>

	  <div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="button" class="btn btn-primary  background-color: #8064A2" data-dismiss="HabilidadesConocimientos">Guardar Datos</button>
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

<h4 class="modal-title"> Sintomas Gastrointestinales</h4>

</div>

<br>



	  <div class="input-group">
          
	  <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        
		<select class="form-control input-lg" id="SG1" name="SG1" required>
            <option value="">Tolerancia Vía Oral</option>
            <option value="Dificultad para Masticar">Dificultad para Masticar</option>
            <option value="Disgeusia">Disgeusia</option>
			<option value="Gastroperacia">Gastroparecia</option>
          </select>

      </div>
	
<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="SGG2" name="SGG2" required>
            <option value="">Anorexia</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>


	


<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="SG3" name="SG3" required>
            <option value="">Vómito</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="SG4" name="SG4" required>
            <option value="">Náuseas</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="SG5" name="SG5" required>
            <option value="">Sensación de Plenitud y Saciedad Temprana</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="SG6" name="SG6" required>
            <option value="">Cambios en el Apetito</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="SG8" name="SG8" required>
            <option value="">Sed</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>


          <select class="form-control input-lg" id="SG7" name="SG7" required>
            <option value="">Problemas en comer los Alimentos</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="SG9" name="SG9" required>
            <option value="">Alteración en Gusto</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	 



	  <br>


	  <div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="button" class="btn btn-primary  background-color: #8064A2" data-dismiss="HabilidadesConocimientos">Guardar Datos</button>
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
  <div class="checkbox">
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SU1[]" value="Fatiga">Fatiga</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SU1[]" value="Neuropatia">Neuropatia</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SU1[]" value="Disminución de agudeza mental">Disminución de agudeza mental</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SU1[]" value="Anorexia y Nauseas">Anorexia y Nauseas</label>

  &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SU1[]" value="Disminucion del Sentido del gusto y olfato">Disminución del Sentido del Gusto y Olfato</label>
 <br>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SU1[]" value="Calambres">Calambres</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SU1[]" value="Piernas Inquietas">Piernas Inquietas</label>
  &nbsp &nbsp &nbsp&nbsp&nbsp
  <label><input type="checkbox" name="SU1[]" value="Alteraciones del Sueño">Alteraciones del Sueño</label>
</div>


</div>

<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Síntomas de Fosfatemia</h4>

</div>


<br>

<div class="custom-control custom-checkbox">


<div class="checkbox">
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SF1[]" value="Fatiga">Comezón</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SF1[]" value="Dolor Óseo">Dolor Óseo</label>

</div>



	</div>
	<br>


	<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Síntomas de Hipercalemia</h4>

</div>


<br>

<div class="custom-control custom-checkbox">
<div class="checkbox">
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SH1[]" value="Temblores">Temblores</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SH1[]" value="Debilidad Muscular">Debilidad Muscular</label>
  &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SH1[]" value="Disnea">Disnea</label>
<br>
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp
  <label><input type="checkbox" name="SH1[]" value="Biacardia">Biacardia</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SH1[]" value="Arritmia">Arritmia</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SH1[]" value="Náuseas">Náuseas</label>
  <br>
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp
  <label><input type="checkbox" name="SH1[]" value="Pulso Lento">Pulso Lento</label>
</div>



	</div>



	
	 
	<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="button" class="btn btn-primary  background-color: #8064A2" data-dismiss="HabilidadesConocimientos">Guardar Datos</button>
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
        
          <select class="form-control input-lg" id="HA1" name="HA1" required>
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

			  <input type="time" class="form-control input-lg" id="HA2" name="HA2" placeholder="Harario de Comida" required>

			</div></td>

    <td><div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Comida</h4>

</div>
<br>
<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="time" class="form-control input-lg" id="HA3" name="HA3" placeholder="Harario de Comida" required>

			</div></td>

    <td><div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Colacion</h4>

</div>
<br>
<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="time" class="form-control input-lg" id="HA4" name="HA4" placeholder="Harario de Comida" required>

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

			  <input type="time" class="form-control input-lg" id="HA5" name="HA5" placeholder="Harario de Comida" required>

			</div></td>



  </tr>

</table>
	</div>

	


<br>

	

<div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HA6" name="HA6" required>
            <option value="">Alimentación antes de terapia sustitutiva</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
<br>


<div class="input-group">
          
		  <span class="input-group-addon"><i class="fa fa-user"></i></span> 

		  <input type="text" class="form-control input-lg" id="HA7" name="HA7" placeholder="Ejemplo" required>

		</div>
		<br>

	<div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HA8" name="HA8" required>
            <option value="">Alimentación Despues de la Terapia Sustitutiva</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <br>

	
	  <div class="input-group">
          
		  <span class="input-group-addon"><i class="fa fa-user"></i></span> 

		  <input type="text" class="form-control input-lg" id="HA9"name="HA9" placeholder="Ejemplo" required>

		</div>
		<br>

		<div class="input-group">
          
		  <span class="input-group-addon"><i class="fa fa-user"></i></span> 

		  <input type="text" class="form-control input-lg"  id="HA10" name="HA10" placeholder="¿Con quien come?" required>

		</div>




		<br>
		<div class="input-group">
          
		  <span class="input-group-addon"><i class="fa fa-user"></i></span> 

		  <input type="text" class="form-control input-lg"  id="HA11" name="HA11" placeholder="¿Quien Prepara los Alimentos?" required>

		</div>



<br>
	<div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HA12" name="HA12" required>
            <option value="">Apego o Aversión a Ciertos Alimentos</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
<br>

<div class="input-group">
          
		  <span class="input-group-addon"><i class="fa fa-user"></i></span> 

		  <input type="text" class="form-control input-lg"  id="HA13"name="HA13" placeholder="Cuales" required>

		</div>

		<br>

<div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HA14" name="HA14" required>
            <option value="">Consumo de Cafeína</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	<br>

	<div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HA15" name="HA15" required>
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
        
          <select class="form-control input-lg" id="HA16" name="HA16" required>
            <option value="">Consumo de Alcohol</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>


<br>

	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HA17" name="HA17" required>
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
        
          <select class="form-control input-lg" id="HA18" name="HA18" required>
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
          <select class="form-control input-lg" id="HA19" name="HA19" required>
            <option value="">Consumo de Refersco</option>
         
            <option value="Si">Si</option>
			<option value="No">No</option>
          </select>
      </div>


<br>

	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>   
          <select class="form-control input-lg" id="HA20" name="HA20" required>
            <option value="">Vasos</option>
         
            <option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="Mas de 6">Mas de 6</option>
          </select>
		  </div>

		  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>   
          <select class="form-control input-lg" id="HA22" name="HA22" required>
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
        
          <select class="form-control input-lg" id="CAA" name="CAA" required>
            <option value="">Problemas en comer los Alimentos</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="HA23" name="HA23" required>
            <option value="">Alteración en Gusto</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	 



	  <br>


	  <div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="button" class="btn btn-primary  background-color: #8064A2" data-dismiss="HabilidadesConocimientos">Guardar Datos</button>
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

			  <input type="text" class="form-control input-lg"  id="AF1" name="AF1" placeholder="Tipo" required>

			</div>
<br>
			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AF2" name="AF2" placeholder="Duración Horas" required>

			</div>

			<br>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AF3" name="AF3" placeholder="Duración Minutos" required>

			</div>
	
<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AF4" name="AF4" required>
            <option value="">Camina Distancias Cortas</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="AF5" name="AF5" required>
            <option value="">Tipo de Ejercicior</option>
         
            <option value="Si">Anaerobio</option>
            <option value="No">Aerobio</option>
          </select>

      </div>

<br>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AF6" name="AF6"  placeholder="Cuales" required>

			</div>

<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg"  id="AF7" name="AF7"  required>
            <option value="">Realiza Actividad de Tipo Laboral</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>

	  <br>

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AF8" name="AF8" placeholder="Ingresar Actividades Fisicas" required>

			</div>
			<br>


	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg"  id="AF9" name="AF9"  required>
            <option value="">Realiza Actividad Fisica Recreativa</option>
         
            <option value="Si">Si</option>
            <option value="No">No</option>
          </select>

      </div>
	  <BR>

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="AF10" name="AF10"  placeholder="Cual" required>

			</div>

	  <br>

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="AF11" name="AF11"  placeholder="Ingresar Actividades Fisicas" required>

			</div>

			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

<?php

  $crearCapacidadF = new ControladorCapacidadF();
  $crearCapacidadF -> ctrCrearCapacidadF();

?>

</form>


	
		</div>
	</div>
</div>

		
<!---==============================



Antropometria Basico
====================================--------->
<form role="form" method="post">

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

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

			  <select class="form-control input-lg" id="Cita" name="Cita" required>
				
				<option value="">Selecionar Cita</option>

				<?php

				$item = null;
				$valor = null;

				$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

				foreach ($categorias as $key => $value) {
				  
				  echo '<option value="'.$value["categoria"].'">'.$value["categoria"].'</option>';
				}

				?>

			  </select>

			</div>

<br>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

			  <select class="form-control input-lg" id="Paciente" name="Paciente" required>
				
				<option value="">Selecionar Nombre del Paciente</option>

				<?php

				$item = null;
				$valor = null;

				$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

				foreach ($clientes as $key => $value) {
				  
				  echo '<option value="'.$value["nombre"].'">'.$value["nombre"].'</option>';
				}

				?>

			  </select>

			</div>

<br>
	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="AB1" name="AB1" placeholder="Estatura" required>

			</div>

			


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"id="AB2" name="AB2" placeholder="Grasas en Sección Superior %" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB3" name="AB3" placeholder="Grasa en Sección Inferior %" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB4" name="AB4" placeholder="Grasa Visceral (Roting)" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB5" name="AB5" placeholder="Masa libre de Grasa kg" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB6" name="AB6" placeholder="Masa Muscular  kg" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB7" name="AB7" placeholder="Peso Óseo" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB8" name="AB8" placeholder="Edad Metabólica" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB9" name="AB9" placeholder="Estatura" required>

			</div>

			<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"> Basica</h4>

</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB10" name="AB10" placeholder="Peso Actual" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB11" name="AB11" placeholder="Peso Habitual" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB12" name="AB12" placeholder="Peso Teórico" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB13" name="AB13" placeholder="Peso Predialisis" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB14" name="AB14" placeholder="Peso Seco" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AB15" name="AB15" placeholder="Peso Corregido por eclema" required>

			</div>



			<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"> Perímetros</h4>

</div>

<br>

<div class="input-group" >


      </div>


	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AP1" name="AP1"  placeholder="Cafálico cm" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AP2" name="AP2"  placeholder="Cuello cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AP3" name="AP3"  placeholder="Mitad de Brazo Relajado cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AP4" name="AP4"  placeholder="Mitad de Brazo Contraido cm" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AP5" name="AP5"  placeholder="Antrbrazo cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AP6" name="AP6"  placeholder="Muñeca cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AP7" name="AP7"  placeholder="Meso esternal cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AP8" name="AP8"  placeholder="Umbilical cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="AP9" name="AP9"  placeholder="Cintura cm" required>

			</div>
			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="AP10" name="AP10"  placeholder="Cadera cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AP11" name="AP11"  placeholder="Muslo cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AP12" name="AP12"  placeholder="Muslo medio cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AP13" name="AP13"  placeholder="Pantorrilla cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AP14" name="AP14"  placeholder="Tobillo cm" required>

			</div>

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

			  <input type="text" class="form-control input-lg" id="AD1" name="AD1" placeholder="Briacromial cm" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AD2" name="AD2" placeholder="Bi ileocrestal cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AD3" name="AD3" placeholder="Longitud de Pie cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AD4" name="AD4" placeholder="Transverso de tórax cm" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AD5" name="AD5" placeholder="Antero posterior del Torax cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="AD6" name="AD6" placeholder="Bi Epicóndilo del Húmero cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AD7" name="AD7" placeholder="Bi Estiloides de la Muñeca cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="AD8" name="AD8" placeholder="BI Maleolar cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AD9" name="AD9" placeholder="Transverso de Pie cm" required>

			</div>
			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AD10" name="AD10" placeholder="Longitud de Manos cm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="AD11" name="AD11" placeholder="Transverso de la Mano cm" required>

			</div>
			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

<?php

  $crearAntropometria = new ControladorAntropometria();
  $crearAntropometria -> ctrCrearAntropometria();

?>

</form>


	
		</div>
	</div>
</div>





<!----
==============================
Bioimpedancia Antropometría
============================-->





<!----
==============================
Bioimpedancia Antropometría
============================-->


<!--===============================-->





<!-------->




<!---
Qumica Sanguinea
==============================-->

<form role="form" method="post">





<!----==========================
Biometría  Hemática
==============================-->

<div class="modal fade" id="Hematica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">


	
		<div class="modal-content">


		
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Encuesta Bioquimicos</h4>

</div>


<br>

<div class="input-group" >


      </div>

	
<br>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

			  <select class="form-control input-lg" id="Cita" name="Cita" required>
				
				<option value="">Selecionar Cita</option>

				<?php

				$item = null;
				$valor = null;

				$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

				foreach ($categorias as $key => $value) {
				  
				  echo '<option value="'.$value["categoria"].'">'.$value["categoria"].'</option>';
				}

				?>

			  </select>

			</div>

<br>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

			  <select class="form-control input-lg" id="Paciente" name="Paciente" required>
				
				<option value="">Selecionar Nombre del Paciente</option>

				<?php

				$item = null;
				$valor = null;

				$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

				foreach ($clientes as $key => $value) {
				  
				  echo '<option value="'.$value["nombre"].'">'.$value["nombre"].'</option>';
				}

				?>

			  </select>

			</div>

			<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Electrolitos</h4>

</div>
	  

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B9" name="B9" placeholder="Sodio MEq/L 136 - 145" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B10" name="B10" placeholder="Calcio mg/dl 9-11" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B11" name="B11" placeholder="Potacio MEq/L 3.5 - 5.5" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B12" name="B12" placeholder="Fósforo mg/dl 2.3 - 4.7" required>

			</div>

			<BR>
		<div class="modal-header" style="background:#3c8dbc; color:white">


<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Biometría Hemática</h4>

</div>

<br>


	
<br>
	  

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B13" name="B13" placeholder="Eritrocitos M/NL  4.2 - 6.2" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="B14" name="B14" placeholder="Concentración de Hemoglobina g/dl 14-17" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B15" name="B15" placeholder="Hematocrito mg/dl  37-47" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B16" name="B16" placeholder="Volumen Corpuscular Medio fl 90-99" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B17" name="B17" placeholder="Hemoglobina Corpuscular Medio fl 90-99" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B18" name="B18" placeholder="Leucocitos k/NL 4.8- 11.8" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B19" name="B19" placeholder="Linfoncitos %M  4-8" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B20" name="B20" placeholder="Eosinfolios %E  0.5 - 4" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B21" name="B21" placeholder="Basófilos  %B  0 - 1.5" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B23" name="B23" placeholder="Neutrofilos segmentados %NS  60 - 65" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B24" name="B24" placeholder="Plaquetas k/NL   150,000 a 400,000" required>

			</div>

			<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Quimica Sanguinea</h4>

</div>

<br>

<div class="input-group" >


      </div>

	  
	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="B1" name="B1" placeholder="Glucosa en ayuno Valor mg/dl Rango 65-100" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B2" name="B2"  placeholder="Glucosa 1 Hora despues de la ingesta mg/dl 110-135" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="B3" name="B3" placeholder="Glucosa 2 horas despues de la ingesta mg/dl 70-120" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="B4" name="B4"  placeholder="Hemoglobina glucosilada (HbAlc) % 5-6" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="B5" name="B5" placeholder="Creatina mg/dl 0.6 - 12" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B6" name="B6" placeholder="Ulea mg/dl 10-40" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="B7" name="B7" placeholder="BUN mg/dl  6-20" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="B8" name="B8" placeholder="Albumina g/dl 35-5" required>

			</div>

	
<br>
	  

	  
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

			  <input type="text" class="form-control input-lg"  placeholder="Colesterol total mg/dl 120 - 199" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg"  id="B36" name="B36" placeholder="Colesterol HDL mg/dl 50 - 60" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B37" name="B37" placeholder="Colesterol LDL mg/dl 65 - 150" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B38" name="B38" placeholder="Colesterol VLDL  mg/dl 5-40" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B39" name="B39" placeholder="Triglicéridos mg/dl  90 - 160" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B40" name="B40" placeholder="Lipidos Totales mg/dl 450 - 1000" required>

			</div>


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

			  <input type="text" class="form-control input-lg" id="B41" name="B41" placeholder="PH  mg/dl 5-7 " required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="B42" name="B42" placeholder="Proteinas  mg/dl 30-150" required>

			</div>

			<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="B43" name="B43" required>
            <option value="">Glucosa</option>
         
            <option value="Positivo">Positivo</option>
            <option value="Negativo">Negativo</option>
          </select>

      </div>

<br>


	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="B44" name="B44" required>
            <option value="">Bilirrubina</option>
         
            <option value="Positivo">Positivo</option>
            <option value="Negativo">Negativo</option>
          </select>

      </div>

<br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="B45" name="B45" required>
            <option value="">Nitritos</option>
         
            <option value="Positivo">Positivo</option>
            <option value="Negativo">Negativo</option>
          </select>

      </div>



	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="B47" name="B47" required>
            <option value="">Cuerpos Cetonicos</option>
         
            <option value="Positivo">Positivo</option>
            <option value="Negativo">Negativo</option>
          </select>

      </div>

	  <br>
	  <div class="input-group">
          
          <span class="input-group-addon"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
        
          <select class="form-control input-lg" id="B48" name="B48" required>
            <option value="">Hemoglobina </option>
         
            <option value="Positivo">Positivo</option>
            <option value="Negativo">Negativo</option>
          </select>

      </div>
		


		
	  <div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

<?php

  $crearBioquimicos = new ControladorBioquimicos();
  $crearBioquimicos -> ctrCrearBioquimicos();

?>

</form>


	
		</div>
	</div>
</div>









<form role="form" method="post">
<!--- ====================================
Clinico
=========================================
-->

<div class="modal fade" id="Clinico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">


<div class="input-group" >


      </div>

	 
	  
	 

	  <!-- Disminución de la Temperatura , Comezón, Hipo-->

	 

	  <div class="custom-control custom-checkbox">


	  <div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Sistema Urinario</h4>

</div>


<br>

<div class="custom-control custom-checkbox">


<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

			  <select class="form-control input-lg" id="Cita" name="Cita" required>
				
				<option value="">Selecionar Cita</option>

				<?php

				$item = null;
				$valor = null;

				$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

				foreach ($categorias as $key => $value) {
				  
				  echo '<option value="'.$value["categoria"].'">'.$value["categoria"].'</option>';
				}

				?>

			  </select>

			</div>

<br>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

			  <select class="form-control input-lg" id="Paciente" name="Paciente" required>
				
				<option value="">Selecionar Nombre del Paciente</option>

				<?php

				$item = null;
				$valor = null;

				$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

				foreach ($clientes as $key => $value) {
				  
				  echo '<option value="'.$value["nombre"].'">'.$value["nombre"].'</option>';
				}

				?>

			  </select>

			</div>


<br>

<div class="checkbox">
  &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SU21[]" value="Disuria">Disuria</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SU21[]" value="Dolor de Riñones">Dolor de Riñones</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SU21[]" value="Oliguria">Oliguria</label>
  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SU21[]" value="Pielonefritis">Pielonefritis</label>
  
  <br>
   &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SU21[]" value="Poliuria">Poliuria</label>
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SU21[]" value="Sindrome Neofrotico">Sindrome Neofrotico</label>
   &nbsp &nbsp &nbsp &nbsp&nbsp
  <label><input type="checkbox" name="SU21[]" value="Sindrome Nefritico">Sindrome Nefritico</label>
  
  <br>
  &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SU21[]" value="Litiasis">Litiasis</label>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp 
  <label><input type="checkbox" name="SU21[]" value="Enfermedad Renal Agudo">Enfermedad Renal Agudo</label>
  <label><input type="checkbox" name="SU21[]" value="Enfermedad Renal Cronica">Enfermedad Renal Cronica</label>
 <br>
 &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SU21[]" value="Nefrosis">Nefrosis</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp 
  <label><input type="checkbox" name="SU21[]" value="Uretritis">Uretritis</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SU21[]" value="Enuresis">Enuresis</label>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SU21[]" value="Crititis">Crititis</label>

  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="SU21[]" name="SU21[]" placeholder="Otro">

			</div>

</div>



	</div>






</div>

<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Sistema Cardiovascular</h4>

</div>


<br>

<div class="custom-control custom-checkbox">


<div class="checkbox">
  &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SC21[]" value="Angina de Pecho">Angina de Pecho</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SC21[]" value="Antecedentes de Infarto">Antecedentes de Infarto</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SC21[]" value="Atereoesclerosis">Ateroesclerosis</label>
  
  <br>
   &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SC21[]" value="Cardiomegalia">Cardiomegalia</label>
   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp  
  <label><input type="checkbox" name="SC21[]" value="Dolor Precordial">Dolor Precordial</label>
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SC21[]" value="Flebodimia">Flebodimia</label>
 <br>
 
   &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SC21[]" value="Hipercolesterolemia">Hipercolesterolemia</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SC21[]" value="Hipertrigliceridemia">Hipertrigliceridemia</label>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp 
  <label><input type="checkbox" name="SC21[]" value="Hipotension">Hipotension</label>
 
  <br>
  &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SC21[]" value="Hipertension">Hipertension</label>
  &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp&nbsp
  <label><input type="checkbox" name="SC21[]" value="Taquicardia">Taquicardia</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  
  <label><input type="checkbox" name="SC21[]" value="Insuficiencia Cardiaca">Insuficiencia Cardiaca</label>
 <BR>
  &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SC21[]" value="Arritmias">Arritmias</label>

  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="SC21[]" name="SC21[]" placeholder="Otro">

			</div>

			


</div>



	</div>





	<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Sistema Digestivo</h4>

</div>


<br>
<br>

<div class="custom-control custom-checkbox">


<div class="checkbox">
  &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SD21[]" value="Angina de Pecho">Angina de Pecho</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SD21[]" value="Antecedentes de Infarto">Antecedentes de Infarto</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SD21[]" value="Atereoesclerosis">Ateroesclerosis</label>
  
  <br>
   &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SD21[]" value="Cardiomegalia">Cardiomegalia</label>
   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp  
  <label><input type="checkbox" name="SD21[]" value="Dolor Precordial">Dolor Precordial</label>
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SD21[]" value="Flebodimia">Flebodimia</label>
 <br>
 
   &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SD21[]" value="Hipercolesterolemia">Hipercolesterolemia</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SD21[]" value="Hipertrigliceridemia">Hipertrigliceridemia</label>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp 
  <label><input type="checkbox" name="SD21[]" value="Hipotension">Hipotension</label>
 
  <br>
  &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SD21[]" value="Hipertension">Hipertension</label>
  &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp&nbsp
  <label><input type="checkbox" name="SD21[]" value="Taquicardia">Taquicardia</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  
  <label><input type="checkbox" name="SD21[]" value="Insuficiencia Cardiaca">Insuficiencia Cardiaca</label>
 <BR>
  &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SD21[]" value="Arritmias">Arritmias</label>

  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="SD21[]" name="SD21[]" placeholder="Otro">

			</div>

			


</div>



	</div>


<!---->
<div class="custom-control custom-checkbox">

<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Boca</h4>
</div>
<div class="checkbox">
  &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SB21[]" value="Cicatrices Angulares">Cicatrices Angulares</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp  &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SB21[]" value="Edema de Lengua">Edema de Lengua</label> &nbsp  &nbsp &nbsp &nbsp   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SB21[]" value="Esmalte Moteado">Esmalte Moteado</label>
   <br>
   &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SB21[]" value="Encias inflamadas hemorragias">Encias inflamadas hemorragias</label>
  &nbsp&nbsp
  <label><input type="checkbox" name="SB21[]" value="Estomatitis">Estomatitis</label> 
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp      
  <label><input type="checkbox" name="SB21[]" value="Glositis">Glositis</label>
  <br>
   &nbsp &nbsp &nbsp &nbsp  
  <label><input type="checkbox" name="SB21[]" value="Lengua Magenta">Lengua Magenta</label>

 
   &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp
  <label><input type="checkbox" name="SB21[]" value="Papilas Filiformes atróficas">Papilas Filiformes atróficas</label>
  <br> &nbsp &nbsp &nbsp&nbsp&nbsp  
  <label><input type="checkbox" name="SB21[]" value="Problemas de eglución">Problemas de eglución</label>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      
  <label><input type="checkbox" name="SB21[]" value="Problemas de Masticación">Problemas de Masticación</label>
 <br>
  &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp
  <label><input type="checkbox" name="SB21[]" value="Problemas de Salivación">Problemas de Salivación</label>
  &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SB21[]" value="Quelosis">Quelosis</label>
    
  <br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <label><input type="checkbox" name="SB21[]" value="Uso de Placa dental">Uso de Placa dental</label>
  &nbsp &nbsp &nbsp &nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  &nbsp &nbsp &nbsp &nbsp  &nbsp&nbsp&nbsp
     

  <label><input type="checkbox" name="SB21[]" value="Falta de Piezas Dentales">Falta de Piezas Dentales</label>
  <br>
  &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SB21[]" value="Candiadisis Oral">Candiadisis Oral</label>
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      
  <label><input type="checkbox" name="SB21[]" value="Aftas">Aftas</label>
  &nbsp &nbsp &nbsp &nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  &nbsp &nbsp &nbsp &nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   
  <label><input type="checkbox" name="SB21[]" value="Herpes">Herpes</label>
  <br>
  &nbsp &nbsp &nbsp &nbsp    
  <label><input type="checkbox" name="SB21[]" value="Boca Seca">Boca Seca</label>
  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="SB21[]" name="SB21[]" placeholder="Otro">

			</div>

			


</div>



	</div>

<!------>
<div class="custom-control custom-checkbox">

<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Cabello</h4>

</div>

<div class="checkbox">
  &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SCa21[]" value="Despigmentado">Despigmentado</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp  &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SCa21[]" value="Escaso">Escaso</label> &nbsp  &nbsp &nbsp &nbsp   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SCa21[]" value="Facil Desprendimiento">Facil Desprendimiento</label>
   <br>
   &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SCa21[]" value="Signo de Bandera">Signo de Bandera</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp&nbsp  &nbsp   
  <label><input type="checkbox" name="SCa21[]" value="Delgado">Delgado</label> &nbsp  
  

  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="SCa21[]" name="SCa21[]" placeholder="Otro">

			</div>
	

</div>



	</div>

	
<!------>
<div class="custom-control custom-checkbox">

<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Ojos</h4>

</div>

<div class="checkbox">
  &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="S021[]" value="Conjuntivitis">Conjuntivitis</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp  &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="S021[]" value="Cataratas">Cataratas</label> &nbsp  &nbsp &nbsp &nbsp   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="S021[]" value="Presbicia">Presbicia</label>
   <br>
   &nbsp &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="S021[]" value="Desprendimiento de Retina">Desprendimiento de Retina</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp&nbsp  &nbsp   &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp  
  <label><input type="checkbox" name="S021[]" value="Gluocoma">Gluocoma</label> &nbsp  
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp&nbsp  &nbsp   &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp  
  <label><input type="checkbox" name="S021[]" value="Retiropatia Diabetica">Retiropatia Diabetica</label> &nbsp  
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp&nbsp  &nbsp   &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp  
  <label><input type="checkbox" name="S021[]" value="Astigmantismo">Astigmantismo</label> &nbsp  
  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp&nbsp  &nbsp   &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp  
  <label><input type="checkbox" name="S021[]" value="Xeroftalmia">Gluocoma</label> &nbsp  
  



  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="S021[]" name="S021[]" placeholder="Otro">

			</div>
	

</div>



<!-------->
<br>

<div class="custom-control custom-checkbox">

<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Glandulas</h4>

</div>

<div class="checkbox">
  &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SG21[]" value="Hipertiroidismo">Hiportiroidismo</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp  &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SG21[]" value="Hipertiroidismo">Hipertiroidismo</label> &nbsp  &nbsp &nbsp &nbsp   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
  
  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="SG21[]" name="SG21[]" placeholder="Otro">

			</div>
	

</div>

</div>

<!---->

<div class="custom-control custom-checkbox">

<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Piel</h4>

</div>

<div class="checkbox">
  &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SP21[]" value="Eczema">Eczema</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp  &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SP21[]" value="Acné">Acné</label> &nbsp  &nbsp &nbsp &nbsp   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp  &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SP21[]" value="Osoriasis">Osoriasis</label> &nbsp  &nbsp &nbsp &nbsp   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp  &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SP21[]" value="Alfrecia">Alfrecia</label> &nbsp  &nbsp &nbsp &nbsp   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp  &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SP21[]" value="Urticaria">Urticaria</label> &nbsp  &nbsp &nbsp &nbsp   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
  
  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="SP21[]" name="SP21[]" placeholder="Otro">

			</div>
	

</div>

</div>

<!---->



			<br>


<!-------->
<div class="custom-control custom-checkbox">

<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Intolerancia a los Alimientos</h4>

</div>

<div class="checkbox">
  &nbsp &nbsp &nbsp &nbsp 
  <label><input type="checkbox" name="SIA21[]" value="Lactosa">Lactosa</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp  &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SIA21[]" value="Gluten">Gluten</label> &nbsp  &nbsp &nbsp &nbsp   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp  &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SIA21[]" value="Fenilalanina">Fenilalanina</label> &nbsp  &nbsp &nbsp &nbsp   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp  &nbsp &nbsp &nbsp
  <label><input type="checkbox" name="SIA21[]" value="Aditivos">Aditivos</label> &nbsp  &nbsp &nbsp &nbsp   &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
  
  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="SIA21[]" name="SIA21[]" placeholder="Otro">

			</div>
	

</div>

</div>

<br>



<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

<?php

  $crearClinicos= new ControladorClinicos();
  $crearClinicos -> ctrCrearClinicos();

?>

</form>


	
		</div>
	</div>
</div>


<form role="form" method="post">


<!--======================
Antropometría Diametros
==============================-->

<div class="modal fade" id="SignosVitales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Signos Aterial</h4>

</div>

<br>

<div class="input-group" >


      </div>

	
<br>


<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

			  <select class="form-control input-lg" id="Cita" name="Cita" required>
				
				<option value="">Selecionar Cita</option>

				<?php

				$item = null;
				$valor = null;

				$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

				foreach ($categorias as $key => $value) {
				  
				  echo '<option value="'.$value["categoria"].'">'.$value["categoria"].'</option>';
				}

				?>

			  </select>

			</div>

<br>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

			  <select class="form-control input-lg" id="Paciente" name="Paciente" required>
				
				<option value="">Selecionar Nombre del Paciente</option>

				<?php

				$item = null;
				$valor = null;

				$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

				foreach ($clientes as $key => $value) {
				  
				  echo '<option value="'.$value["nombre"].'">'.$value["nombre"].'</option>';
				}

				?>

			  </select>

			</div>


<br>

	  <div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="Si" name="Si" placeholder="Sistólica mm Hg" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="Di" name="Di" placeholder="Diastólica mm Hg" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="Dia" name="Dia"  placeholder="Diagnóstica " required>

			</div>

			<br>
			<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Temperatura</h4>

</div>

<br>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="Bo" name="Bo" placeholder="Boca  36 - 38 °C" required>

			</div>

	

	<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="Ax" name="Ax" placeholder="Axila °C " required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="In" name="In" placeholder="Ingle 36 - 38 °C " required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="Re" name="Re" placeholder="Recto  36 - 38 °C " required>

			</div>
			
<BR>
<div class="modal-header" style="background:#3c8dbc; color:white">

<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title">Pulso</h4>

</div>

<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="Ca" name="Ca" placeholder="Cartideo 60-100 ppm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="Ra" name="Ra" placeholder="Radial 60-100 ppm" required>

			</div>


			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="Axi" name="Axi" placeholder="Axilar 60-100 ppm" required>

			</div>

			

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="Bro" name="Bro" placeholder="Broquial 60-100 ppm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="Femu" name="Femu" placeholder="Femural 60-100 ppm" required>

			</div>

			<div class="input-group">
              
			  <span class="input-group-addon"><i class="fa fa-gratipay" aria-hidden="true"></i></span> 

			  <input type="text" class="form-control input-lg" id="O" name="O" placeholder="Otro" required>

			</div>
			<div class="modal-footer">

<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

<button type="submit" class="btn btn-primary  background-color: #8064A2">Guardar Datos</button>

</div>

<?php

  $crearSigno = new ControladorSignoss();
  $crearSigno -> ctrCrearSignoss();

?>

</form>


	
		</div>
	</div>
</div>



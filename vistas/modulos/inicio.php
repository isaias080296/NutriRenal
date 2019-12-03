<div class="content-wrapper">
<!--=====================================
GoMercadito Abigail Villanueva Tlazalo 
            Isaías Galdino Gomez Duarte
            2018
  ======================================-->
  <section class="content-header">
    
    <h1>
      
      Tablero
      
      <small>Panel de Control</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Tablero</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">
      
    <?php

    if($_SESSION["perfil"] =="Administrador"){

      include "inicio/cajas-superiores.php";

    }

    ?>

       
        <div class="col-lg-12">

          <?php

          if($_SESSION["perfil"] =="Administrador"){
          
           include "reportes/grafico-ventas.php";

          }

          ?>

        </div>

   
 
</div>

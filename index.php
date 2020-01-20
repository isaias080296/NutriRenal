<?php
/*=============================================

=============================================*/	
require_once "controladores/checkboc.controlador.php";
require_once "controladores/capacidadf.controlador.php";
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once "controladores/antropometria.controlador.php";
require_once "controladores/bioquimicos.controlador.php";
require_once "controladores/signos.controlador.php";

require_once "modelos/bioquimicos.modelo.php";
require_once "modelos/signos.modelo.php";
require_once "modelos/checkbox.modelo.php";
require_once "modelos/capacidadf.modelo.php";
require_once "modelos/antropometria.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
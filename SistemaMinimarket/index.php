<?php

require "controladores/plantilla.controlador.php";
require "controladores/usuarios.controlador.php";
require "controladores/categorias.controlador.php";
require "controladores/productos.controlador.php";
require "controladores/clientes.controlador.php";
require "controladores/ventas.controlador.php";
require "controladores/proveedores.controlador.php";


require "modelos/usuarios.modelo.php";
require "modelos/categorias.modelo.php";
require "modelos/productos.modelo.php";
require "modelos/clientes.modelo.php";
require "modelos/ventas.modelo.php";
require "modelos/proveedores.modelo.php";


require "extensiones/vendor/autoload.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
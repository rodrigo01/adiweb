<?php

require("config_var.php");

$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");

$selected = mysql_select_db($dbname,$dbhandle) 
  or die("Could not select examples");

// Carga de variables de conexion global
$appControl = 'control/';
$appViews = 'views/';
$appModel = 'models/';
$baseurl = 'http://www.arturoarellano.com/';

//cargamos los modelos
include('models/usuarios.php');
include('models/sliders.php');
include('models/uploads.php');
include('models/actividades.php');
include('models/testimonios.php');
include('models/contactos.php');
include('models/nosotros.php');
include('models/productos.php');
include('models/calendario.php');
include('models/contenidos.php');
include('models/inscripciones.php');

?>
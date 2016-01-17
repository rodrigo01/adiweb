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


?>
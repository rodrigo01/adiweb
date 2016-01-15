<?php

/* Información de conexión local
---------------------------------------------------------*/
// Para servidor
/*$server	= 'localhost';
$user	= 'serverb2_boletin';
$pass 	= 'xvMT(Q7~EfJ?';
$bd		= 'serverb2_boletin'; */

// Para local
$server	= 'apitecdev.com';
$user	= 'livehost_adiweb';
$pass 	= 'adi0102web';
$bd		= 'livehost_adiweb';

$conect = mysql_connect($server, $user, $pass, $bd); 

if(!$conect) { die("Mysql Error Connect!!" . mysql_error()); }

mysql_select_db($bd, $conect);

//variables de sitio
$baseurl = 'http://www.arturoarellano.com/';
$appControl = 'control/';
$appViews = 'views/';
$appModels = 'models/';

//modelos
include($appModels.'usuarios.php');
include($appModels.'sliders.php');


?>
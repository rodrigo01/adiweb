<?php
$server	= 'apitecdev.com';
$user	= 'livehost_adiweb';
$pass 	= 'adi0102web';
$bd		= 'livehost_adiweb';

$conect = mysql_connect($server, $user, $pass, $bd); 

if(!$conect) { die("Mysql Error Connect!!" . mysql_error()); }

mysql_select_db($bd, $conect);

//variables de sitio
$baseurl = 'http://www.arturoarellano.com/';

?>
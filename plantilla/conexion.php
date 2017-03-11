<?php
/*$servidor="localhost";
$usuario="root";
$pwd="alexander";
$BD="servcios_libres";*/

$servidor="mysql.hostinger.mx";
$usuario="u880520094_isc";
$pws="123456";
$bd="u880520094_oscar";
$conn=mysqli_connect($servidor,$usuario,$pws,$bd)or die("Error al conectarse a la base de datos".mysqli_error());
?>

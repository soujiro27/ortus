<?php
session_start();
include ("mysql.class.php");
$db=new MySQL();
$db->open();
$cuatri=$_POST['cuatri'];
$carrera=$_POST['carrera'];
$cadena="";
$consulta=$db->consulta("select * from alumno where id_carrera=$carrera and id_cuatri=$cuatri;");

if ($row=$db->fetch_array($consulta))
{
	$cadena=$cadena."<form action=php/up_calificaciones.php method=post><table class=table><tr><td>Nombre</td><td>Calificacion</td></tr>";
	do {
		$nombre=$row['nombre']." ".$row['apellido_p']." ".$row['apellido_m'];
		$cadena=$cadena."<tr><td>".$nombre."</td><td><input type=number id=cal_alumno pattern=[0-10] style=width:50px></td></tr>";


	} while ($row=$db->fetch_array($consulta));

$cadena=$cadena."</table><input type=submit value=Enviar class=button></form>";
}
echo $cadena;

?>

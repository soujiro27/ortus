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
	$cadena=$cadena."<form action=php/up_calificaciones.php method=post><table class=table><tr><td>Nombre</td>";
	$cadena=$cadena."<td>06/18</td><td>06/19</td><td>06/25</td><td>06/26</td><td>07/02</td><td>07/03<td>07/09</td></tr>";
	do {
		$nombre=$row['nombre']." ".$row['apellido_p']." ".$row['apellido_m'];
		$cadena=$cadena."<tr><td>".$nombre."</td><td><input type=checkbox></td><td><input type=checkbox></td><td><input type=checkbox></td><td><input type=checkbox></td><td><input type=checkbox></td><td><input type=checkbox></td><td><input type=checkbox></td></tr>";


	} while ($row=$db->fetch_array($consulta)); 

$cadena=$cadena."</table><input type=submit value=Enviar class=button></form>";
}
echo $cadena;

?>

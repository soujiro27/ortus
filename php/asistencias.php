<?php
session_start();
include ("mysql.class.php");
$db=new MySQL();
$db->open();
$id=$_POST['id_alumno'];

$cadena="";
$consulta=$db->consulta("select  asistencias.id_alumno, asistencias.id_materia,day(asistencias.fecha) as dia,month(asistencias.fecha) as mes,asistencias.asistio, materia.materia from asistencias,materia where asistencias.id_materia=materia.id and asistencias.id_alumno=$id");

$cadena="<h2>Asistencias</h2>";
if ($row=$db->fetch_array($consulta))
{
$cadena=$cadena."<article id=cajita><h4>".$row['materia']."</h4>";
$cadena=$cadena."<table class=table><tr><td>Materia</td><td>Dia</td><td>Mes</td><td>Asistio</td></tr>";
	do {
	

	if($row['asistio']==1)
	{
		$texto="<img src=img/menu/023.png>";
	}
	else
	{
		$texto="<img src=img/menu/020.png>";
	}




	$cadena=$cadena."
	
	<tr class=warning>
	<td>".$row['materia']."</td>
		<td>".$row['dia']."</td>
		<td>".$row['mes']."</td>
		<td>".$texto."</td>
		
	</tr>";
		} while ($row=$db->fetch_array($consulta));
		$cadena=$cadena."</table>";
}
echo $cadena;

?>



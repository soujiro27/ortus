<?php
session_start();
include ("mysql.class.php");
$db=new MySQL();
$db->open();
$id=$_POST['id_alumno'];

$cadena="";
$consulta=$db->consulta("select boleta.id_alumno, boleta.calificacion, boleta.parcial, materia.materia  from boleta,materia where boleta.id_materia=materia.id and boleta.id_alumno=$id;");

$cadena="<h2>Calificaciones</h2>";
if ($row=$db->fetch_array($consulta))
{

	do {
		$porcentaje=$row['calificacion']*10;
	$porcentaje=$porcentaje."%";
	$cadena=$cadena."<article id=cajita><h4>".$row['materia']."</h4>";
	$cadena=$cadena."<div class=progress-bar>
       <span style=width:".$porcentaje." id=progresito style=text-align:center></span>
   </div>
   <div id=contenedor_bolita><p id=bolita>".$row['calificacion']."</p></div>
   </article>";
		


	} while ($row=$db->fetch_array($consulta));


}
echo $cadena;

?>


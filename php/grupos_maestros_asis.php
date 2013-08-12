<?php
session_start();
include ("mysql.class.php");
$db=new MySQL();
$db->open();
$id=$_POST['id_maestro'];

$cadena="";
$consulta=$db->consulta("select * from materia where id_profesor=$id;");

if ($row=$db->fetch_array($consulta))
{
$cadena=$cadena."<select onchange=carga_alumnos_asis(".$row['id_cuatri'].",".$row['id_carrera'].")>";
$cadena=$cadena."<option>Selecciona una Materia</option>";
	do {
		
		$cadena=$cadena."<option value=".$row['id_cuatri'].">".$row['materia']."</option>";


	} while ($row=$db->fetch_array($consulta));

$cadena=$cadena."</select>";
}
echo $cadena;

?>

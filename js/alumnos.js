$(document).on("ready",esconde);

function esconde()
{
	$("aside.lateral").hide();
	$(".calificaciones").hide();
	$("#up_files").hide();
	$("#seccion_asistencias").hide();
}

function cali(id)
{
	var id_alumno=parseInt(id);
	$("#bienvenida").hide();
	$("#seccion_asistencias").hide();




	$.post("php/calificaciones.php",{id_alumno:id_alumno},function(data){
		var html=data;
		$("#secion_calificaciones").html(html);
		$("div.progress-bar").addClass("blue");
		$("div.progress-bar").addClass("stripes");
		$("article#cajita").css({
			background:"white",
			padding:"1%",
			margin:"2% 0",
			"border-radius":"15px",

	});

		$("div#contenedor_bolita").css({
			background:"black",
			width:"80px",
			height:"80px",
			display:"inline-block",
			"border-radius":"50%",
			"text-align":"center",
			float:"right",
			"vertical-align":"top",
			margin: "-90px 0",
			padding:"0",
			border: "5px solid #b6bcc7",
			"box-shadow":"5px 5px 5px black",

	});

		$("div#contenedor_bolita p").css({
			color: "white",
			"margin-top":"30px",
			"font-size":"20px",


	});
		
	});

$(".calificaciones").show('slow');
delete html;
delete id_alumno;
}


function asis(id)
{
	$("#bienvenida").hide();
	$(".calificaciones").hide();
	var id_alumno=parseInt(id);
	$.post("php/asistencias.php",{id_alumno:id_alumno}, function(data){
	var html=data;
	$("#seccion_asistencias").html(html);



	});
	$("#seccion_asistencias").show('slow');
}


function sube_files()
{
		$("aside.lateral").hide();
		$("#bienvenida").hide();
		$(".calificaciones").hide();
		$("#seccion_asistencias").hide();

		$("#up_files").show('slow');

		$("section#up_files div.container").css({
			
			width: "70%",
			margin: "0",
			



	});


$(".fileupload-buttonbar").css({
			border:"3px dashed black",
			padding: "1%",
			"border-radius": "8px",
			



	});


$("section#up_files table.table").css({
			margin: "1% 0 0 0",
			



	});
}


function cali_maestro()
{
	$("#bienvenida").hide();
	$("#seccion_asistencias").hide('slow');
	var id_maestro=3;
	$.post("php/grupos_maestros.php",{id_maestro:id_maestro},function(data){
		html=data;
		$("#formulario_maestro").html(html);
	})

	


	$("#secion_calificaciones_maestro").show('slow');
}


function carga_alumnos(cautri,carrera)
{
	var cuatri=cautri;
	var carrera=carrera;

	$.post("php/carga_tabla_alumnos.php",{cuatri:cuatri,carrera:carrera},function(data){
		var html=data;
		$("#tabla_alumnos").html(html);
	});
}


function asist_maestro()
{
	$("#bienvenida").hide();
	$("#secion_calificaciones_maestro").hide();
	//$(".informacion").hide();

	var id_maestro=3;
	$.post("php/grupos_maestros_asis.php",{id_maestro:id_maestro},function(data){
		html=data;
		$("#formulario_maestro_asist").html(html);
	});

	$("#seccion_asistencias").show('slow');
}


function carga_alumnos_asis(cautri,carrera)
{
	var cuatri=cautri;
	var carrera=carrera;

	$.post("php/carga_tabla_alumnos_asis.php",{cuatri:cuatri,carrera:carrera},function(data){
		var html=data;
		$("#tabla_asistencias").html(html);
	});


}











$(function () {
    $('#tooltip1').tooltip();
});



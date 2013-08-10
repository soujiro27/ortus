$(document).on("ready",esconde);

function esconde()
{
	$("aside.lateral").hide();
	$(".calificaciones").hide();
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


$(function () {
    $('#tooltip1').tooltip();
});



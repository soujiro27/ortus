<?php
session_start();
$_SESSION["nombre"];
$_SESSION["carrera"]; 
$_SESSION["cuatri"];
$_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Plataforma Educativa</title>
	<link rel="icon" type="image/png" href="/images/mifavicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Checa aisistencias, calificaciones, sube archivos online">
	<meta name="author" content="ISC10">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/blueimp-gallery.min.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="css/alumnos.css">
	
	

	
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	
<header class="menu">
	<ul>
		<li><a href="#" id="tooltip1" rel="tooltip" title="Inicio"><img src="img/menu/home.png" ></a></li>
		<li><a href="#" id="tooltip1" rel="tooltip" title="Calificaciones" onclick="cali_maestro();"><img src="img/menu/calendar.png" alt=""></a></li>
		<li><a href="#" id="tooltip1" rel="tooltip" title="Asistencias" onclick="asist_maestro();"><img src="img/menu/address-book.png" alt=""></a></li>
		<li><a href="/wordpress/" id="tooltip1" rel="tooltip" title="Foros"><img src="img/menu/compose-4.png" alt=""></a></li>
		<li><a href="#" id="tooltip1" rel="tooltip" title="Archivos" onclick="sube_files_maestro();"><img src="img/menu/folder-add.png" alt=""></a></li>
		<li class="notificacion"><a href="#" id="tooltip1" rel="tooltip" title="Notificaciones"><img src="img/menu/bell.png" alt=""></a></li>
		<li class="salir"><a href="#" id="tooltip1" rel="tooltip" title="Salir"><img src="img/menu/locked.png" alt=""></a></li>
	</ul>
</header>

<section class="container">
<section class="row">
<article class="span4 informacion">
		<article class="datos">
			<img src="img/maestros/jcru.jpg" alt="" class="span1">
			<h4 class="offset1 nombre_alumno"><?php echo $_SESSION["nombre"];?></h4>
			<h4 class="offset1">Universidad</h4>
			<h4 class="offset1">Sistemas</h4>		
		</article>
		<article class="grupos">
			<h4>Grupos</h4>
			<article id="grupos_creados"></article>
			<h5>Crear Grupo <button class="btn btn-primary">+</button></h5>
		</article>
</article>

<article class="span8">
<section class="bienvenida" id="bienvenida">
	<hgroup class="head_welcome">
		<h1>"Bienvenido a Ortus"</h1>
		<h4>"Ortus es la mejor plataforma de educación online y con tu apoyo, la experiencia será más inolvidable.</h4>
			<h4>Ortus es una plataforma de educación en línea de última generación que tiene como objetivo resolver los dos problemas principales con la educación en línea actual: el compromiso real de los cursos y un sentido activo de la comunidad y la colaboración."</h4>
	</hgroup>
	<article class="descripcion">
		<article class="des_cali">
			<figure>
			<img src="img/menu/calendar.png" alt="Calificaciones">
			</figure>
			<p>En este Modulo podras consultar tus calificaciones, parcial por parcial asi como tus examenes finales</p>	
		</article>
		<article class="des_asistencias">
			<p>En este modulo podras Consultar tus asistencias, asi como tus faltas, saber si tienes derecho a examen</p>
			<figure><img src="img/menu/address-book.png" alt=""></figure>
		</article>
		<article class="des_cali">
			<figure>
			<img src="img/menu/compose-4.png" alt="Calificaciones">
			</figure>
			<p>En los foros podras compatir experiencias asi como tambien crear tus propios cuartos de discusion</p>	
		</article>
		<article class="des_asistencias">
			<p>En este modulo podras subir achivos y compartirlo con tus diferentes grupos</p>
			<figure><img src="img/menu/folder-add.png" alt=""></figure>
		</article>
	</article>

</section>


<section class="calificaciones" id="secion_calificaciones_maestro">
    <h2>Modulo de Calificaciones</h2>
    <article>
        <form action="" id="formulario_maestro">
            
        </form>
    </article>
    <article id="tabla_alumnos">
        
    </article>
</section>

<section class="asistencias" id="seccion_asistencias">
    <h2>Modulo de Asistencias</h2>
    <article>
        <form action="" id="formulario_maestro_asist">
            
        </form>
    </article>
	<article id="tabla_asistencias">
        
    </article>
</section>

<section class="up_files container" id="up_files">
	<div class="container">
   
    
    <form id="fileupload" method="POST" enctype="multipart/form-data">
        
        <noscript><input type="hidden" name="redirect"></noscript>
                <div class="row fileupload-buttonbar">
            <div class="span7">
                
                <span class="btn btn-success fileinput-button">
                    <i class="icon-plus icon-white"></i>
                    <span>Añadir archivos...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="icon-upload icon-white"></i>
                    <span>Iniciar carga</span>
                </button>
                
                <button type="button" class="btn btn-danger delete">
                    <i class="icon-trash icon-white"></i>
                    <span>Borrar</span>
                </button>
                <input type="checkbox" class="toggle">
                
                <span class="fileupload-loading"></span>
            </div>
          
            <div class="span5 fileupload-progress fade">
               
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="bar" style="width:0%;"></div>
                </div>
               
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </form>
    <br>
    
</div>

<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            {% if (file.error) { %}
                <div><span class="label label-important">Error comprimir porfavor</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <p class="size">{%=o.formatFileSize(file.size)%}</p>
            {% if (!o.files.error) { %}
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="bar" style="width:0%;"></div></div>
            {% } %}
        </td>
        <td>
            {% if (!o.files.error && !i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start">
                    <i class="icon-upload icon-white"></i>
                    <span>Iniciar</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="icon-ban-circle icon-white"></i>
                    <span>Cancelar</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>

<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
            </p>
            {% if (file.error) { %}
                <div><span class="label label-important">Error comprimir porfavor</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                <i class="icon-trash icon-white"></i>
                <span>Borrar</span>
            </button>
            <input type="checkbox" name="delete" value="1" class="toggle">
        </td>
    </tr>
{% } %}
</script>
</section>

</article>
</section>
</section>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>	
<script src="js/vendor/jquery.ui.widget.js"></script>

<script src="js/tmpl.min.js"></script>
<script src="js/load-image.min.js"></script>

<script src="js/canvas-to-blob.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.blueimp-gallery.min.js"></script>
<script src="js/jquery.iframe-transport.js"></script>

<script src="js/jquery.fileupload.js"></script>

<script src="js/jquery.fileupload-process.js"></script>
<script src="js/jquery.fileupload-image.js"></script>
<script src="js/jquery.fileupload-audio.js"></script>
<script src="js/jquery.fileupload-video.js"></script>
<script src="js/jquery.fileupload-validate.js"></script>
<script src="js/jquery.fileupload-ui.js"></script>
<script src="js/main.js"></script>


<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/alumnos.js"></script>
	 


</body>
</html>

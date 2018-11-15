<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Deportivo Kairos | Galería</title>
		<link rel="icon" href="img/fav.png">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/galeria.css">
		<link rel="stylesheet" type="text/css" href="css/slideshow.css">
		<link rel="stylesheet" type="text/css" href="css/fonts.css">
		<script src="js/carpetas.js"></script>
		<script src="js/slideshow.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/galeria.js"></script>
	</head>
	<body>
		<div id="general">
			<?php
				include "cgl/superu.CGL";
				include "cgl/header.CGL";
			?>
			<div id="contenedor">
				<div id="carpetas">
					<ul class="menu">
						<li id="carpeta-1" onclick="mostrar('carpeta-1')">Invitaciones</li>
						<li id="carpeta-2" onclick="mostrar('carpeta-2')">Estadales</li>
						<li id="carpeta-3" onclick="mostrar('carpeta-3')">Nacionales</li>
						<li id="carpeta-4" onclick="mostrar('carpeta-4')">Amistosos</li>
						<li id="carpeta-5" onclick="mostrar('carpeta-5')">Diversion</li>
						<li id="carpeta-6" onclick="mostrar('carpeta-6')">Trabajo Social</li>
						<li id="carpeta-7" onclick="mostrar('carpeta-7')">Videos</li>
						<li id="carpeta-8" onclick="mostrar('carpeta-8')">L.F.S.M.S</li>
					</ul>
				</div>
			<!--	<div class="zoom">
					<div class="maszoom icon-zoom-in"></div>
					<div class="menoszoom icon-zoom-out"></div>
				</div>	-->
				<div id="contenido">
					<div id="full">
						<div>
							<img src="" id="imgFull"/>
						</div>
					</div>
					<article id="galeria">

						<p id="aviso">Selecione alguna carpeta para mostrar su contenido</p>
						
						<div id="contenido-carpeta-1" class="oculto">
							<?php
								$carpeta = "invitaciones";
								$link = mysql_connect('localhost','usuario','usuario') or die ('No se pudo conectar: '.mysql_error());
								$db = mysql_select_db('newdeportivokairos') 		   or die ('No se pudo seleccionar la base de datos');
								$query = mysql_query("SELECT * FROM galeria WHERE carpeta='$carpeta' ORDER BY ID DESC");
								while($url = mysql_fetch_array($query, MYSQL_ASSOC)){
									echo '<div class="img-wrapper"><div><img src="'.$url['url'].'"></div></div>';
								}
								mysql_close();
							?>
						</div>

						<div id="contenido-carpeta-2" class="oculto">
							<?php
								$carpeta = "estadales";
								$link = mysql_connect('localhost','usuario','usuario') or die ('No se pudo conectar: '.mysql_error());
								$db = mysql_select_db('newdeportivokairos') 		   or die ('No se pudo seleccionar la base de datos');
								$query = mysql_query("SELECT * FROM galeria WHERE carpeta='$carpeta' ORDER BY ID DESC");
								while($url = mysql_fetch_array($query, MYSQL_ASSOC)){
									echo '<div class="img-wrapper"><div><img src="'.$url['url'].'"></div></div>';
								}
								mysql_close();
							?>
						</div>

						<div id="contenido-carpeta-3" class="oculto">
							<?php
								$carpeta = "nacionales";
								$link = mysql_connect('localhost','usuario','usuario') or die ('No se pudo conectar: '.mysql_error());
								$db = mysql_select_db('newdeportivokairos') 		   or die ('No se pudo seleccionar la base de datos');
								$query = mysql_query("SELECT * FROM galeria WHERE carpeta='$carpeta' ORDER BY ID DESC");
								while($url = mysql_fetch_array($query, MYSQL_ASSOC)){
									echo '<div class="img-wrapper"><div><img src="'.$url['url'].'"></div></div>';
								}
								mysql_close();
							?>
						</div>

						<div id="contenido-carpeta-4" class="oculto">
							<?php
								$carpeta = "amistoso";
								$link = mysql_connect('localhost','usuario','usuario') or die ('No se pudo conectar: '.mysql_error());
								$db = mysql_select_db('newdeportivokairos') 		   or die ('No se pudo seleccionar la base de datos');
								$query = mysql_query("SELECT * FROM galeria WHERE carpeta='$carpeta' ORDER BY ID DESC");
								while($url = mysql_fetch_array($query, MYSQL_ASSOC)){
									echo '<div class="img-wrapper"><div><img src="'.$url['url'].'"></div></div>';
								}
								mysql_close();
							?>
						</div>

						<div id="contenido-carpeta-5" class="oculto">
							<?php
								$carpeta = "diversion";
								$link = mysql_connect('localhost','usuario','usuario') or die ('No se pudo conectar: '.mysql_error());
								$db = mysql_select_db('newdeportivokairos') 		   or die ('No se pudo seleccionar la base de datos');
								$query = mysql_query("SELECT * FROM galeria WHERE carpeta='$carpeta' ORDER BY ID DESC");
								while($url = mysql_fetch_array($query, MYSQL_ASSOC)){
									echo '<div class="img-wrapper"><div><img src="'.$url['url'].'"></div></div>';
								}
								mysql_close();
							?>
						</div>

						<div id="contenido-carpeta-6" class="oculto">
							<?php
								$carpeta = "trabajo_social";
								$link = mysql_connect('localhost','usuario','usuario') or die ('No se pudo conectar: '.mysql_error());
								$db = mysql_select_db('newdeportivokairos') 		   or die ('No se pudo seleccionar la base de datos');
								$query = mysql_query("SELECT * FROM galeria WHERE carpeta='$carpeta' ORDER BY ID DESC");
								while($url = mysql_fetch_array($query, MYSQL_ASSOC)){
									echo '<div class="img-wrapper"><div><img src="'.$url['url'].'"></div></div>';
								}
								mysql_close();
							?>
						</div>

						<div id="contenido-carpeta-7" class="oculto">
							<?php
								$carpeta = "videos";
								$link = mysql_connect('localhost','usuario','usuario') or die ('No se pudo conectar: '.mysql_error());
								$db = mysql_select_db('newdeportivokairos') 		   or die ('No se pudo seleccionar la base de datos');
								$query = mysql_query("SELECT * FROM galeria WHERE carpeta='$carpeta' ORDER BY ID DESC");
								while($url = mysql_fetch_array($query, MYSQL_ASSOC)){
									echo '<div class="img-wrapper"><div><img src="'.$url['url'].'"></div></div>';
								}
								mysql_close();
							?>
						</div>

						<div id="contenido-carpeta-8" class="oculto">
							<?php
								$carpeta = "l.f.s.m.s";
								$link = mysql_connect('localhost','usuario','usuario') or die ('No se pudo conectar: '.mysql_error());
								$db = mysql_select_db('newdeportivokairos') 		   or die ('No se pudo seleccionar la base de datos');
								$query = mysql_query("SELECT * FROM galeria WHERE carpeta='$carpeta' ORDER BY ID DESC");
								while($url = mysql_fetch_array($query, MYSQL_ASSOC)){
									echo '<div class="img-wrapper"><div><img src="'.$url['url'].'"></div></div>';
								}
								mysql_close();
							?>
						</div>
					</article>
				</div>
			<?php include "cgl/footer.CGL"; ?>
		</div>
	</body>
</html>
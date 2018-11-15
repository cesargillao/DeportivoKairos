<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Deportivo Kairos</title>
		<link rel="icon" href="img/fav.png">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/slideshow.css">
		<link rel="stylesheet" type="text/css" href="css/fonts.css">
        <script src="js/jquery.js"></script>
		<script src="js/slideshow.js"></script>
	</head>
	<body>
		<div id="bienvenida">
			<div>
				<div id="welc">
					<span>ENTRAR</span>
					<img id="welcome" src="img/logo.png">
				</div>
				<img id="fondo" src="img/Bienvenida.png">
			</div>
		</div>

		<div id="general">

			<?php
				session_start();
				$Usuario = @$_SESSION['Usuario'];
				
				if(isset($Usuario)){
					echo '<script>
							$(document).ready(function(){
								$("#bienvenida").hide();})
						  </script>
						  <div id="SesionAbierta">
							<span id="Usuario">'.$Usuario.'</span>
							<a href="post.php" id="EscArt">Escribir Artículo</a>
							<a href="pic.php" id="SubIm">Subir Imagen</a>
							<a href="cerrarsesion.php" id="CerrarSesion">Cerrar Sesion</a>
						  </div>';
				}else{
					echo '<script>
							$(document).ready(function(){
								$("#welcome").click(ocultar);
								$("#welc span").click(ocultar);});
							function ocultar(){
									$("#bienvenida").hide();
								}
						  </script>';
				}
				include "cgl/header.CGL";
			?>

			<div id="contenedor">
				<div id="contenido">
					
				<?php
					$link = mysql_connect('localhost','usuario','usuario') or die('No se pudo conectar: '.mysql_error());
					$bd = mysql_select_db('newdeportivokairos')            or die('No se pudo seleccionar la base de datos');
					$query = mysql_query('SELECT * FROM inicio ORDER BY ID DESC') or die('Consulta fallida: '.mysql_error());
					while($fila = mysql_fetch_array($query, MYSQL_ASSOC)){
						echo
						'<article>
							<h1>'.utf8_encode($fila['titulo']).'<span id="fecha">'.utf8_encode($fila['fecha']).'</span></h1>
							<p>'.utf8_encode($fila['contenido']).'</p>
						</article>';
					}
					mysql_close();
				?>
				
				</div>
				<div class="aside">
					<?php include "cgl/aside.CGL";?>
				</div>
			</div>
			<?php include "cgl/footer.CGL"; ?>
		</div>
	</body>
</html>
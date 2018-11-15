<!DOCTYPE html>
<html>
<head>
	<title>Escribir</title>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/font.css">
	<link rel="stylesheet" type="text/css" href="../css/respuesta.css">

	<?php

		@$tabla = $_GET['tabla'];
		@$titulo = $_GET['titulo'];
		@$contenido = $_GET['contenido'];
		@$fecha = $_GET['fecha'];
		@$todas = $tabla && $titulo && $contenido && $fecha;

		if($todas!=''){
			$link = mysql_connect('localhost','usuario','usuario') or die ('No se pudo conectar: '.mysql_error());
			$bd = mysql_select_db('newdeportivokairos') or die('No se pudo seleccionar la base de datos');
			$query = mysql_query("INSERT INTO $tabla VALUES (NULL,'$titulo','$contenido','$fecha')") or die('Consulta fallida: '.mysql_error());
			mysql_close();
			echo '<p>Se ha publicado el artículo en '.$tabla.'</p>
				  <div><a href="../index.php">Ir al inicio</a></div>
				  <div><a href="post.php">Escribir otro artículo</a></div>';
		}else{
			echo '<p>Vuelva y complete todos los campos.<br>
					 Asegurese de haber seleccionado la sección donde quiere escribir.</p>';
		}
	?>

</head>
<body>
</body>
</html>

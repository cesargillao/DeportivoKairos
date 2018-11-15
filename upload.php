<!DOCTYPE html>
<html>
<head>
	<title>Subir Foto</title>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/font.css">
	<link rel="stylesheet" type="text/css" href="../css/respuesta.css">

	<?php

		@$carpeta = $_GET['carpeta'];
		@$url = $_GET['enlace'];
		@$todas = $carpeta && $url;
		
		if($todas!=''){
			$link = mysql_connect('localhost','usuario','usuario') or die ('No se pudo conectar: '.mysql_error());
			$bd = mysql_select_db('newdeportivokairos') or die('No se pudo seleccionar la base de datos');
			$query = mysql_query("INSERT INTO galeria VALUES (NULL,'$url','$carpeta')") or die('Consulta fallida: '.mysql_error());
			mysql_close();
			echo '<p>Se ha publicado la imágen en '.$carpeta.'</p>
				  <div><a href="../index.php">Ir al inicio</a></div>
				  <div><a href="pic.php">Subir otra imágen</a></div>';
		}else{
			echo '<p>Vuelva y complete todos los campos.<br>
				     Asegurese de haber seleccionado la carpeta donde quiere subir la imágen.</p>';
		}
	?>

</head>
<body>
</body>
</html>
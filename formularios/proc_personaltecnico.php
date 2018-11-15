<html>
<head>
	<title>Personal Técnico</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="icon" href="../img/fav.png">
	<link rel="stylesheet" type="text/css" href="../css/font.css">
	<link rel="stylesheet" type="text/css" href="../css/respuesta.css">
</head>
<body>
	<?php
		
		include "../cgl/superu.CGL";

		/* VARIABLES / CAMPOS */
	
		@$nombre = utf8_decode($_POST['nombre']);
		@$apellido = utf8_decode($_POST['apellido']);
		@$sexo = $_POST['sexo'];
		@$cedula = $_POST['cedula'];
		@$dia = $_POST['dia'];
		@$mes = $_POST['mes'];
		@$anio = $_POST['anio'];
		@$fecha =  $dia." de ".$mes." de ".$anio;
		@$profesion = utf8_decode($_POST['profesion']);
		@$telefono = $_POST['telefono'];
		@$estudios = utf8_decode($_POST['estudios']);
		@$experiencia = utf8_decode($_POST['experiencia']);
		@$disciplina = utf8_decode($_POST['disciplina']);
		@$todas = $nombre && $apellido && $sexo && $cedula && $fecha && $profesion && $telefono && $estudios && $experiencia && $disciplina;
	
		/* CORREO DE AVISO */

		@mail("deportivokairos@hotmail.com, deportivokairos@gmail.com", 'Inscripción De Personal Técnico', $nombre.' '.$apellido);
			
		//* CONTENIDO A INSERTAR EN LA BASE DE DATOS */
	
		if($todas!=''){
			$link = mysql_connect('localhost','usuario','usuario') or die ('No se pudo conectar: '.mysql_error());
			$bd = mysql_select_db('newdeportivokairos') or die('No se pudo seleccionar la base de datos');
			$query = mysql_query("INSERT INTO Personal_Técnico VALUES (NULL,'$nombre','$apellido','$sexo','$cedula','$fecha','$profesion','$telefono','$estudios','$experiencia','$disciplina')") or die('Consulta fallida: '.mysql_error());
			mysql_close();
			echo '<p>¡El formulario se ha enviado con éxito!</p>
				<div><a href="../index.php">Volver a la página principal</a></div>';
		}else{
			echo "<p class='error'>Ha ocurrido un error, por favor ingrese al formulario que desee en el botón de abajo.<br>
			Si el problema persiste contacte al personal técnico mediante los números telefónicos<br>o correos anexados en el pie de página para resolver el problema.<p>
			<div><a href='index.php'>Seleccionar Formulario</a></div>";
		}
	?>
</body>
</html>
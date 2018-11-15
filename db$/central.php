<!DOCTYPE html>
<html>
<head>
	<title>Central</title>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/font.css">
	<link rel="stylesheet" type="text/css" href="../css/respuesta.css">
</head>
<body>
<?php
	session_start();
	@$usuario = $_GET['usuario'];
	@$clave = md5($_GET['clave']);
	
	$link = mysql_connect('localhost','usuario','usuario') or die('No se pudo conectar: '.mysql_error());
	$bd = mysql_select_db('newdeportivokairos') or die('No se pudo seleccionar la base de datos');
	$query = mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'") or die('Consulta fallida: '.mysql_error());
	if($fila = mysql_fetch_array($query, MYSQL_ASSOC)){
		@$_SESSION['Usuario'] = $fila['nombre'];
			header('Location: ../index.php');
	}else{
		header('Location: login.php');
	}
?>
</body>
</html>

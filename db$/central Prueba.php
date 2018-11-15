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

@$usuario = $_GET['usuario'];
@$contrasena = $_GET['contrasena']; // md5($_GET['contrasena']);

session_start();

$db = new SQLite3('deportivokairos.db');
$peticion = $db->query("SELECT * FROM login WHERE usuario='$usuario' AND contraseña='$contrasena'");


if($resultado = $peticion->fetchArray()){
	@$_SESSION['Login'] = $usuario;
	header('Location: adminer.php');
}
else{
	echo '<p>Se ha producido un error<p>
	<div><a href="../index.php">Ir al inicio</a></div>';
}
}else{
	echo '<p>¡Ha ocurrido un error!</p>
	<div><a href="../index.php">Ir al inicio</a></div>';
}
$db->close();
?>
	</body>
</html>

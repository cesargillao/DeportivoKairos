<!DOCTYPE html>
<html>
<head>
	<title>Subir Foto</title>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/pic.css">
	<link rel="stylesheet" type="text/css" href="css/error.css">
	<script src="js/jquery.js"></script>
	<script src="js/post.js"></script>
</head>
<body>
	<div class="wrapper">
		<?php
		session_start();
		$Usuario = @$_SESSION['Usuario'];
					
		if(isset($Usuario)){
			include 'cgl/pic.CGL';
		}else{
			header('Location: index.php');
	}
	?>
	</div>
</body>
</html>
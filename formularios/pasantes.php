<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Solicitud de Pasantias</title>
		<link rel="icon" href="../img/fav.png">
		<link rel="stylesheet" href="../css/formulario.css" type="text/css">
	</head>
	<body>
		<div id="contenido">		
			<form name="formpasantes" method="post" action="proc_pasantes.php" id="formulario" required>
			<?php include "../cgl/superu.CGL"; ?>
				<p class="titulo">Solicitud de Pasantias</p>
				<div class"form">
					<p class="datos">Para realizar tus pasantias con nosotros completa este formulario.</p>
					<li>
						<label style="padding-right:15px">Fecha de Nacimiento</label>
						<select class="btnfecha dia" name="dia">
							<?php

								for ($i=1; $i<=31; $i++) {
									echo "<option value='$i'>$i</option>";
								}

							?>
						</select>
						<select class="btnfecha mes" name="mes">
							<?php
								$mes = array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
								for ($i=1; $i<=count($mes); $i++) {
									list($clave, $valor) = each($mes);
									echo "<option value='$valor'>$valor</option>";
								}
							?>
						</select>
						<select class="btnfecha anio" name="anio">
							<?php

								for ($i=date("Y"); $i>=1900; $i--) {
									echo "<option value='$i'>$i</option>";
								}

							?>
						</select>
						<select class="btnfecha anio" name="anio">
							<script>
								for (var i=0; i<100; i++)
								document.write("<option>"+ parseInt(2014-i) +"</option>")
							</script>
						</select>
					</li>
					<li>
						<label style="float:left; margin-left:164px; margin-right:13px;">Sexo</label>
						<div class="sexo" style="padding-left:20px">
							<input type="radio" value="Masculino" name="sexo" id="s1">
							<label for="s1">Masculino</label>
							<input type="radio" value="Femenino" name="sexo" id="s2">
							<label for="s2">Femenino</label>
					</div>
					</li>
					<li>
						<label>Nombres</label>
						<input name="nombre" type="text" min="2" max="25" required/>
					</li>
					<li>
					    <label>Apellidos</label>
						<input name="apellido" type="text" min="2" max="25" required/>
					</li>
					<li>
				    <label>Cédula de Identidad</label>
					    <input name="cedula" type="text" value="V-" min="8" max="15" required/>
					</li>
					<li>
					    <label>Número Telefónico</label>
					    <input name="telefono" type="text" min="8" max="15" required/>
					</li>
				    <li>
				    	<label>Institución de Procedencia</label>
					    <input name="institucion" type="text" min="2" max="50" required/>
				    </li>
				    <li>
				    	<label>Tutor de la Institución</label>
					    <input name="tutor" type="text" min="2" max="50" required/>
				    </li>
					<li>
						<p class="terminos">Al enviar el formulario asumo la responsabilidad de que los datos son correctos</p>
					</li>
				</div>
					<button type="submit" class="enviar">Enviar</button>
					<a id="salir" href="../index.php" onclick="return salir()">Regresar</a>
					<script>
						function salir(){
							var respuesta = confirm("¿Seguro que desea salir del formulario?");
						return respuesta;}
					</script>
			</form>
		</div>
	</body>
</html>
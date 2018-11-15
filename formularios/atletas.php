<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Formulario Para Atletas</title>
		<link rel="icon" href="../img/fav.png">
		<link rel="stylesheet" href="../css/formulario.css" type="text/css">
	</head>
	<body>
		<div id="contenido">
			<?php include "../cgl/superu.CGL"; ?>
			<form name="formatletas" action="proc_atletas.php" method="post" id="formulario">
				<p class="titulo">Formulario Para Atletas</p>
				<div class"form">
					<p class="datos">Datos del Atleta</p>
					<li class="disciplina">
						<div>
							<input type="radio" value="Fútbol" name="disciplina" id="d1">
							<label for="d1">Fútbol</label>
							<input type="radio" value="Fútbol Sala" name="disciplina" id="d2">
							<label for="d2">Fútbol Sala</label>
							<input type="radio" value="Basquetbol" name="disciplina" id="d3">
							<label for="d3">Basquetbol</label>
							<input type="radio" value="Voleibol" name="disciplina" id="d4">
							<label for="d4">Voleibol</label>
							<input type="radio" value="Kikimbol" name="disciplina" id="d5">
							<label for="d5">Kikimbol</label>
						</div>
					</li>
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
					    <label>Correo Electrónico</label>
					    <input name="correo" type="email" min="5" max="40" required/>
					</li>
					<li>
					    <label>Número Telefónico</label>
					    <input name="telefono" type="text" min="10" max="15" required/>
					</li>
					<li>
					    <label>Dirección</label>
					    <input name="direccion" type="text" min="7" max="50" required/>
					</li>
						<p class="datos">Datos del Representante</p>
				    <li>
				    	<label>Nombres</label>
					    <input name="nombreR" type="text" min="2" max="25" required/>
				    </li>
				    <li>
				    	<label>Apellidos</label>
					    <input name="apellidoR" type="text" min="2" max="25" required/>
				    </li>
				    <li>
				    	<label>Cédula de Identidad</label>
					    <input name="cedulaR" type="text" value="V-" min="8" max="15" required/>
				    </li>
				    <li>
				    	<label>Número Telefónico</label>
						<input name="telefonoR" type="text" min="10" max="15" required/>
					</li>
					<li>
						<p class="terminos">Al enviar el formulario asumo la responsabilidad de que los datos son correctos</p>
					</li>
				</div>
					<button type="submit" class="enviar" id="enviar">Enviar</button>
					<a id="salir" href="../index.php" onclick="return salir()">Regresar</a>
					<script>
						function salir()
						{
							var respuesta = confirm("¿Seguro que desea salir del formulario?");
							return respuesta;
						}
					</script>
			</form>
		</div>
	</body>
</html>
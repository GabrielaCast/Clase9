<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/hoja1.css">
		-
	</head>
	<body>
	<div class="row" id="color">
		<h1>Ejercicio 2</h1>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<img src="img/HTML5.png" width="150" height="150"  alt="Imagen de fondo2">
		</div>
		<div class="col-sm-4 Color2">
			<h3>La siguiente Columna es PHP</h3>
			<p>Emplearemos ciclos para recorrerlos</p>
			<hr>
			<table>
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
				</tr>
				<tr>
					<td>Jorge</td>
					<td>Bueso</td>
				</tr>
				<tr>
					<td>Marco</td>
					<td>Bardales</td>
				</tr>
				<tr>
					<td>Sully</td>
					<td>Mancia</td>
				</tr>
			</table>
		</div>
		<div class="col-sm-4 div2">
			<?php
				$mensaje="Bienvenido a nuestra aplicacion";
				$clase=2;
				$opcion="gd";

				echo $mensaje;
				echo "Esta es la clase # $clase";
				echo "<br>";
				echo "Esta es la clase ".$mensaje;
				echo "<br>";
				echo "<br>";
				echo strlen("Clases");
				echo "<br>";
				echo str_word_count("Gracias_totales_Bienvenidos");
				echo "<br>";
				echo strrev("Anita lava la tina");
				echo "<br>";
				echo strpos("Este es un ejemplo sobre pos","pos");
				echo "<br>";
				echo str_replace("pos","replace","Este es un ejemplo sobre pos");
				echo "<br>";

				switch($opcion)
				{
					case "Colegio":
					case "colegio":
						echo "Bienvenido colegial";
						break;
					case "Universidad":
					case "universidad":
						echo "Bienvenido universitario";
						break;
					default:
						echo "Bienvenido";
				}

				$x=1;
				$y=0;
				echo "<br>";

				while($x<=5)
				{
					echo "El numero es $x <br>";
					$x++;
				}
				echo "<br>";
				do
				{
					echo "$y <br>";
					$y++;
				}while($y!=2);

			?>
		</div>
	</div>
	<!--
		<h1>Ejercicio Clase 2</h1>
		<br>
		<hr>
		<p title="Esta es la clase 2">En esta clase aprenderemos a programar en PHP</p>

		<img src="img/HTML5.png" width="50" height="50"  alt="Imagen de fondo2">-->
	</body>
</html>
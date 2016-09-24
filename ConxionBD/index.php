<?php
	include_once("enrutador.php");
	include_once("controlador.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>index</title>

	</head>
	<body>
		<h1>Bienvenidos Estudiantes</h1>
		<section>
			<?php
				$enrutador=new enrutador();
				//if($enrutador->validarGet($_GET['cargar'])){
				if($enrutador->validarGet(isset($_GET['cargar']))){
					$enrutador->cargarVista($_GET['cargar']);	
				}
			//?cargar=crear	
			?>
		</section>
	</body>
</html>
<?php
	
	$Numeros=array(15,12,3,14);
	$Alumnos=array("JC"=>"Verde","MB"=>"Violeta","CT"=>"Azul");
	//echo $Numeros[0];
	//$Numeros[2]=132;
	//echo $Numeros[2];
	//echo count($Numeros);
	//echo "JC ama el color ".$Alumnos["JC"];
	/*$tam=count($Numeros);
	for($x=0;$x<$tam;$x++)
	{
		echo $Numeros[$x]." , ";
	}*/

	foreach ($Alumnos as $key => $value) {
		echo "Nombre= ".$key."  Color = ".$value;
		echo "<br>";
	}

?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 1 </title>
	</head>

	<body>
	<?php
	
	$dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo");
	
	foreach ($dias as $indice => $dia)
	{
		echo "Indice: $indice, Dia: $dia<br/>";
	}
	
	echo "<hr>";
	
	for( $i = 0; $i < count($dias); $i++)
	{
		echo "Indice: $i, Dia: $dias[$i]<br/>";
	}
	?>
	
	</body>

</html>


<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 3</title>
	</head>

	<body>
	<?php
	
	// Declaramos variables
	
	$radioT = 6371;
	$distancia = 1496*pow(10, 6);
	
	// Calculamos lo que nos pide
    // con M_PI usamos la constante, y no la función
	
	$circunferencia = 2 * pi() * $radioT;
	
	$numVueltas = $distancia/$circunferencia;
	
	
	// Mostramos por pantalla 
	
	echo "Distancia de una vuelta al mundo: $circunferencia <br/>";
	
	echo "Número de vueltas al mundo equivale la distancia entre la Tierra y el sol: $numVueltas";
	
	?>
	</body>

</html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 5 - Tabla multiplicar</title>
	</head>

	<body>
	<?php

    echo "<center>"; 
	echo "<table border= 1px solid black>";
	
	// Si queremos th, tendremos que poner los headers primero, y a continuacion rellenar la tabla
    // Podemos ahorrarnos este bucle, poniendo una condicion en el siguiente bucle: si es la primera linea meteme th, si no td 
	for($i = 0; $i <= 9; $i++)
	{
		echo "<th><b>Tabla del $i </b></th>";
	}
	
	for($i = 0; $i <= 9; $i++)
	{
		// Ponemos primera fila
		echo "<tr>";
		for($j = 0; $j <= 9; $j++)
		{
			// Rellenamos las filas para abajo
			echo "<td>$i x $j = ".($i*$j)."</td>";
		}
		echo "</tr>";		
	}
	echo "</table>";
    echo "</center>"; 

    ?>
	</body>

</html>

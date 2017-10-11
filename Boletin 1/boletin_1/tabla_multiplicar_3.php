<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 7 - Tabla multiplicar</title>
	</head>

	<body>
	<?php
	
	// Creamos variable numero
		$numero = 2;
	
	echo "<table border= 1px solid black>";
	
	for($i = 0; $i < 1; $i++)
	{
		// Ponemos primera fila
		
		for($j = 0; $j <= 9; $j++)
		{
			echo "<tr>";
			// Rellenamos las filas para abajo
			echo "<td>$numero x $j </td>";
			echo "<td>".$numero*$j."</td>";
			echo "</tr>";
		}
				
	}
	echo "</table>";
	?>
	</body>

</html>
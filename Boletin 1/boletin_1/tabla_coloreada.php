<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 8 - Tabla coloreada</title>
	</head>

	<body>
	<?php
	
	// Creamos variable cont
    $cont = 0;
	
    // Creamos tabla
	echo "<table border= 1px solid black>";
	
    // Colocamos primera fila
	echo "<tr>";
	for($i = 1; $i <= 100; $i++)
	{
            
			// Rellenamos la tabla
            // Si el contador es impar, es decir si estamos en la segunda fila, coloreamos
			if($cont%2 == 1)
            {
                echo "<td style=background-color:lightgrey>$i</td>";
            }
            else
            {
                echo "<td>$i</td>";
            }
			
			// Si es multiplo de 10 cambiamos fila
			if ($i%10 == 0)
			{
                // Ponemos el contador aqui para saber el numero de filas y poder colorearlas arriba
                echo "</tr><tr>";
                $cont++;
			}
        
	}
	echo "</tr>";
	echo "</table>";
	?>
	</body>

</html>
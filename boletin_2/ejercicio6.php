<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 6 </title>
	</head>

	<body>
		<?php
		
		// Creamos array asociativo con colores fuertes y suaves
		
		$colores = array( 
							"fuerte" => array("Rojo" => "FF0000", "Verde" => "00FF00", "Azul" => "0000FF"),
					 		"suave" => array("Rosa" => "FE9ABC", "Amarillo" => "FDF189", "Malva" => "BC8F8F")
					);
		
		
		 //print_r($colores);
		 
		 echo "<table border= 1px black>";
		 foreach ($colores as $tipos)
		 {	
		 	echo "<tr>";
		 	foreach ($tipos as $indx => $color)
		 	{
				// Como tenemos la referencia de colores en el array, lo usamos para ponerlo de background
		 		echo "<td style=background-color:#".$color.">$indx : $color</td>";
		 	}
		 	echo "</tr>";
		 }
		 echo "</table>";
		?>
	
	</body>

</html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 4 </title>
	</head>

	<body>
		<?php
		
		$info = array (
						"Nombre"    => "Juan Pérez",
						"Dirección" => "C/Paz 27",
						"Teléfono"	=> "635 23 34 45"
		);
		
		
		foreach ($info as $datos => $dato)
		{
			echo "$datos : $dato </br>";
		}
		
		?>
	
	</body>

</html>


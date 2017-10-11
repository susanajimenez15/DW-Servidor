<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 4 - Switch </title>
	</head>

	<body>
	<?php
	
	$cadena = "arriba";
	
	switch ($cadena)
	{
		case "arriba":
			echo "Estoy arriba";
			break;
		case "abajo":
			echo "Estoy abajo";
			break;
		case "medio":
			echo "Estoy en medio";
			break;
		default:
			echo "Estoy en otros";
			break;
	}
	?>
	</body>

</html>

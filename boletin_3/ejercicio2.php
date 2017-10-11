<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 2 </title>
	</head>
	
<?php

	$frase = "Pablo clavo un clavito";
			
	// strpos(): nos dice si en un string se encuentra un caracter
	
	echo "<b>".$frase."</b>";
		
	// explode(): convierte un string en array, indicandole el limitador
	$fraseEnArray = explode(" ", $frase);
	// $nombreDominio = array([0] => "sujica94", [1] => "gmail.com");
	echo  "<p>".$fraseEnArray[0]." ".$fraseEnArray[1]."</p>";

?>

	<body>
	</body>


</html>

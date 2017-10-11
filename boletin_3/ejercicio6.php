<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 6 </title>
	</head>
	
<?php


$frase = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";

// lo convertimos en un array que nos guarda cada palabla en una posicion
$fraseEnArray = explode(" ", $frase);

for($i = 0; $i < count($fraseEnArray); $i++)
{
	echo "<p>".$fraseEnArray[$i]."</p>";
}

//print_r($fraseEnArray);
?>

	<body>
	</body>


</html>

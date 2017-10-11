<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 5 </title>
	</head>
	
<?php


$frase = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";

$letra = "a";
$remplazo = "*";

// str_replace(): sustituimos $letra por su $remplazo que lo hacemos en $frase
$fraseModificada = str_replace($letra, $remplazo, $frase);

echo "<p>".$frase."</p>";
echo "<p>".$fraseModificada."</p>";
?>

	<body>
	</body>


</html>

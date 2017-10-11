<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 4</title>
	</head>
<?php 

	$frase = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
	
	$vocales = array("a", "e", "i", "o", "u");
	
	for($i = 0; $i<count($vocales)-1; $i++)
	{
        // foreach tmb podria, y cogemos las vocales directamente del array
		$cont = mb_substr_count($frase, $vocales[$i]);
		echo "<p><b>La frase: </b><i>'".$frase."</i>'<b> contiene ".$cont." ".$vocales[$i]."'s.<b></p>";
	}

?>


	<body>
	</body>

</html>
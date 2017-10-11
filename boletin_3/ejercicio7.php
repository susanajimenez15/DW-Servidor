<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 7 </title>
	</head>
	
	<?php
	
	
		$frase = "ApRendEr proGraMarciÓn";
		echo "<p>".$frase."</p>";
		
		// mb_strtolower(): para la codificacion multibyte
		$fraseMinuscula = mb_strtolower($frase);
		echo "<p>".$fraseMinuscula."</p>";
	
		$longitud = mb_strlen($fraseMinuscula);
        $asterisco = "*";
		if ($longitud%2 == 0)
		{
            $fraseMod = str_repeat($asterisco, $longitud/2).$fraseMinuscula.str_repeat($asterisco, $longitud/2);
			echo "<p>".$fraseMod."</p>";
			
		}else
		{
            $longitud += 1;
            $fraseMod = str_repeat($asterisco, $longitud/2).$fraseMinuscula.str_repeat($asterisco, $longitud/2);
			echo "<p>".$fraseMod."</p>";
			
			
		}
		
	?>

	<body>
	</body>


</html>

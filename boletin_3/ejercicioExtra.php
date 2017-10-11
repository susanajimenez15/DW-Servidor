<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 1 </title>
	</head>
	
<?php

	$frase = "ñu es mamifero";
	$eñe = "ñ";
			
	// strpos(): nos dice si en un string se encuentra un caracter
	// Tenemos que poner = 0, porque eso significa true, si no daria false.
	echo "<b>".$frase."</b>";
	if(mb_strpos($frase, $eñe) == 0)
	{
		echo "<p>Tiene eñe </p>";
		
	}else
	{
		echo "<p>NO tiene eñe.</p>";
	}
	
	

?>


	<body>
	</body>


</html>


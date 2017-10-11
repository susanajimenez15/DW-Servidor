<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 3 </title>
	</head>
	
<?php

	$frase = "La bala mata a la vaca";
	$frase2 = "El oso osó asir a la osa";


    // Usamos mb_substr_count para que cuente bien
	$cont =	mb_substr_count($frase, "a");

	echo "$frase => $cont </br>";
	
    // Si quisieramos comprobar cuantas o hay, habría que comprobar las o y las ó
	$cont =	mb_substr_count($frase2, "a");
	
    echo "$frase2 => $cont";
?>

	<body>
	</body>


</html>

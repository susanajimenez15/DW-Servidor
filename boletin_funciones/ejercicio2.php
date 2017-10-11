<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 2 </title>
	</head>

<?php

	function sinTildes ($cadena)
	{
		$vocales = [
					"a" => "á" ,
					"e" => "é",
					"i" => "í",
					"o" => "ó",
					"u" => "ú"];
		
		$vocales2 = [
				"a" => "à" ,
				"e" => "è",
				"i" => "ì",
				"o" => "ò",
				"u" => "ù"];
		
		foreach($vocales as $idx => $vocal)
		{
			$cadena = str_replace($vocal, $idx, $cadena);
		}
		foreach($vocales2 as $idx => $vocal)
		{
			$cadena = str_replace($vocal, $idx, $cadena);
		}
		
		return $cadena;
	}
	
	$cadena = "Hóla carácolà, càmbíò lás tíldés";
	echo $cadena."</br>";
	echo sinTildes($cadena);
	
?>
<body>
</body>

</html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 1 </title>
	</head>

<?php

	function capitales ($pais, $capital="Madrid", $habitantes="muchos" )
	{
		return "La capital de ".$pais." es ".$capital." y tiene ".$habitantes." habitantes </br>";
	}
	
	echo capitales("España", "Madrid", "10000");
	echo capitales("Portugal", "Lisboa");
	
?>
<body>
</body>

</html>
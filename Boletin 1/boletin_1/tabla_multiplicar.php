<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 5 - Tabla multiplicar</title>
	</head>

	<body>
	<?php
	
	for($i = 0; $i <= 9; $i++)
	{
		echo "<b>Tabla del $i </b><br/>";
		for($j = 0; $j <= 9; $j++)
		{
			echo "$i x $j = ".($i*$j)."<br/>";
		}
		echo "<br/>";
	}
	
	?>
	</body>

</html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 2</title>
	</head>

	<body>
	<?php

    $paises = array(
                    "Francia" => "Paris",
                    "Alemania" => "Berlin",
                    "España" => "Madrid",
                    "Italia" => "Roma",
                    "Portugal" => "Lisboa"
                    );
                    
    foreach ($paises as $pais => $capital)
    {
            echo "<p>La capital de ".$pais." es ".$capital."</p>";  
    }

    echo "<p>Ordenamos lista por nombre del pais (por clave)</p>";

    ksort($paises);

    foreach ($paises as $pais => $capital)
    {
            echo "<p>La capital de ".$pais." es ".$capital."</p>";  
    }
    echo "<p>Ordenamos lista por nombre de capital (por valor)</p>";

    asort($paises);

    foreach ($paises as $pais => $capital)
    {
            echo "<p>La capital de ".$pais." es ".$capital."</p>";  
    }
	?>
	</body>

</html>
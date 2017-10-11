<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 1</title>
	</head>

	<body>
	<?php

    $pila = array(
                    "cinco" => 5,
                    "uno" => 1,
                    "cuatro" => 4,
                    "dos" => 2,
                    "tres" => 3
                );

    print_r($pila);

    echo "<br/>";
    echo "<p>Ordenamos array</p>";
    echo "<hr>";
    echo "<p><b>asort():</b> ordena un array manteniendo la correlación de los índices del array con los elementos con los que están asociados. ordena por valor".'<br><i>bool sort ( array &$array [, int $sort_flags = SORT_REGULAR ] )</i>'."</p>";
    asort($pila);
    print_r($pila);

    echo "<hr>";
    echo "<p><b>arsort():</b> ordena un array en orden inverso y mantiene la asociación de índices.".'<br><i>bool arsort ( array &$array [, int $sort_flags = SORT_REGULAR ] )</i>'."</p>";
        arsort($pila);
        print_r($pila);

    echo "<hr>";
    echo "<p><b>ksort():</b> ordena un array por clave.".'<br><i>bool sort ( array &$array [, int $sort_flags = SORT_REGULAR ] )</i>'."</p>";
        ksort($pila);
        print_r($pila);

    echo "<hr>";
    echo "<p><b>sort():</b> ordena un array.".'<br><i>bool sort ( array &$array [, int $sort_flags = SORT_REGULAR ] )</i>'."</p>";
        sort($pila);
        print_r($pila);

    echo "<hr>";
    echo "<p><b>rsort():</b> ordena un array en orden inverso.".'<br><i>bool rsort ( array &$array [, int $sort_flags = SORT_REGULAR ] )</i>'."</p>";
        rsort($pila);
        print_r($pila);

	?>
	</body>

</html>
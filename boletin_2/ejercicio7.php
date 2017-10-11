<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 7 </title>
	</head>

	<body>
		<?php
		
		// Creamos array bidimensional que contenga 5 alumnos, y 3 notas de cada uno
		
		 $lista = array(
						'Miguel' => array(
										'Servidor'	=> 10,
										'Cliente'	=> 8,
										'Diseño'	=> 5
										),
						'Marta' => array(
										'Servidor'	=> 7,
										'Cliente'	=> 5,
										'Diseño'	=> 9
										),
						'Jorge' => array(
										'Servidor'	=> 6,
										'Cliente'	=> 5.5,
										'Diseño'	=> 4
										),
						'Angel' => array(
										'Servidor'	=> 10,
										'Cliente'	=> 9,
										'Diseño'	=> 10
										),
						'Susana' => array(
										'Servidor'	=> 10,
										'Cliente'	=> 9,
										'Diseño'	=> 8
										)
						);
		 
		// Creamos tabla para mostrar contenido
		print_r($lista);
		 
		echo "<table border= 1px black>";
		echo "<tr>";
		echo "<th>NADA</th>";
		$cont = 0;
		$suma = 0;
		foreach($lista as $alumno => $materias)
		{
				foreach($materias as $nombre => $nota)
				{
					// Ponemos en la primera vuelta los nombres de las materias
					if($cont == 0)
					{
						echo "<th>$nombre</th>";
					}
				}
				
			if ($cont == 0)
			{
				echo "<th>Nota media del alumno</th>";	
			}
			
			$cont++;
			
			echo"</tr><tr>";
			echo "<td>$alumno</td>";
			 
			foreach($materias as $nombre => $nota)
			{
				echo "<td>$nota</td>";
				$suma += $nota;
			}
			 
			 echo "<td>".($suma/3)."</td>";
			 echo"</tr><tr>";
		 }
	/*	$cont = 0;
		$suma = 0;
		 foreach($lista as $alumno => $materias)
		{
				foreach($materias as $nombre => $nota)
				{
					if ($cont == 0)
					{
					echo"<td>Nota media materia</td>";
					}
					$cont++;
					$suma += $nota;
				}
					echo"<td>".($suma/5)."</td>";
		}
	*/	 echo "</tr>";
		 
		 echo "</table>";
		 
		?>
	
	</body>

</html>

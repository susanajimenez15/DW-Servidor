<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 1 </title>
	</head>
	
<?php

	$email1 = "sujica94@gmail.com";
	$email2 = "sujica94@gmail";
	$punto = ".";
	$arroba = "@";
			
	// strpos(): nos dice si en un string se encuentra un caracter
	
	echo "<b>".$email1."</b>";
	if(strpos($email1, $punto) && strpos($email1, $arroba))
	{
		echo "<p>Es un email válido.</p>";
		
		// explode(): convierte un string en array, indicandole el limitador
		$nombreDominio = explode($arroba, $email1);
		// $nombreDominio = array([0] => "sujica94", [1] => "gmail.com");
		echo "<p><b>Nombre:</b> ".$nombreDominio[0]."</br>
				<b>Dominio:</b> ".$nombreDominio[1]."</p>";
	}else
	{
		echo "<p>NO es un email válido.</p>";
	}
	
	echo "<b>".$email2."</b>";
	if(strpos($email2, $punto) && strpos($email2, $arroba))
	{
		echo "<p>Es un email válido.</p>";
		$nombreDominio = explode($arroba, $email2);
		echo "<p><b>Nombre:</b> ".$nombreDominio[0]."</br>
				<b>Dominio:</b> ".$nombreDominio[1]."</p>";
	}else
	{
		echo "<p>NO es un email válido.</p>";
	}
	

?>


	<body>
	</body>


</html>

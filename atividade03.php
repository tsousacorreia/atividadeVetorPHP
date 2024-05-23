<?php 

	$vetor = array();

	$multiplicar = rand(1, 100);

	for ($i = 0; $i < 10; $i++) {
		$vetor[$i] = rand(1,100);
	}

	echo "Números digitados no vetor:</br>";
	echo "</br>";

	foreach($vetor as $numero){
		echo "$numero</br>";
	}

	echo "</br>Número multiplicador: $multiplicar</br>";

	foreach($vetor as $numero){
		echo "</br>$multiplicar x $numero = " . $multiplicar * $numero;
	}

 ?>
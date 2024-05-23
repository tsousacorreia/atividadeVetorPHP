<?php 

	$vetor = array();
	$negativos = 0;
	$positivos = 0;
	$pares = 0;
	$impares = 0;

	for ($i = 0; $i < 10; $i++) {
		$vetor[$i] = rand(-10,10);
	}

	echo "Números digitados:</br>";

	foreach ($vetor as $numeros) {
		if ($numeros < 0) {
			$negativos++;
		} elseif ($numeros > 0) {
			$positivos++;
		}

		if ($numeros % 2 == 0) {
			$pares++;
		} else {
			$impares++;
		}

		echo "</br>$numeros";	
	}

	echo "</br>";
	echo "</br>Quantidade de números negativos: $negativos";
	echo "</br>Quantidade de números positivos: $positivos";
	echo "</br>Quantidade de números pares: $pares";
	echo "</br>Quantidade de números impares: $impares";

 ?>
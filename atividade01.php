<?php 

	$alunos = array();
	$notas = array();
	$media = 0.0;
	$soma = 0.0;

 	for ($i=1; $i <= 10; $i++) {
		$aluno = array_push($alunos, "Aluno$i");
		$notas[$i-1] = rand(0,10);
		echo $alunos[$i-1].", Nota = ".$notas[$i-1]."<br/>";
		$soma += $notas[$i-1];
 	}

 	$media = $soma / 10;

 	$maiorNota = max($notas);

 	echo "<br/>Média de nota da classe = $media<br/>";

 	echo "<br/>A maior nota da classe foi "

 ?>
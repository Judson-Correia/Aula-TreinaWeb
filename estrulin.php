<?php

	$a = 20;
	$b = 15;

	if($a > $b)
		echo "Sim, isso é verdade: 20 > 15";

	echo "<br>";

	$c = 15;
	$d = 15;

	if ($c == $d)
		echo "Passou 1; ";
		echo "Passou 2; ";
		echo "Passou 3; ";

	echo "<br>";

	$a = 20;
	$b = 15;

	if ($a == $b) {
		echo "Sim, é igual.";
	} else {
		echo "Não sei.";
	}

	echo "<br>";

	$idade = 18;

	if ($idade >= 18) {
		echo "Jovem";
	} else {
		echo "Velho";
	}

	echo "<br>";

	$idade = 17;

	if ($idade > 12 && $idade < 18) {
		echo "Adolescente";
	} else {
		echo "Não sei";
	}

	echo "<br>";

	$a = 10;
	$b = 10;

	if ($a == $b) { // Igual
		echo "Entrou 1; ";
	}

	if ($a >= $b) { // Maior ou igual
		echo "Entrou 2; ";
	}

	if ($a > $b) { // Maior
		echo "Entrou 3; ";
	}

	if ($a < $b) { // Menor
		echo "Entrou 4; ";
	}

	if ($a <= $b) { // Menor ou igual
		echo "Entrou 5; ";
	}

	echo "<br>";

	$acao = 1;

	if ( $acao==1 || $acao==2) { // Se for igual a 1 ou igual 2
		echo "Entrou 1; ";
	}

	if ( $acao==1 && $acao==2) { // Se for igual a 1 e igual 2 (Impossivel)
		echo "Entrou 2; ";
	}

	if ( $acao==1 || $acao==2 || $acao==3) { // Se for igaul a 1 ou igual a 2 ou igual a 3
		echo "Entrou 3;";

		}

	echo "<br>";

	$valor = 8;

	$retorno = ( $valor>10) ? 'Maior que 10.' : 'Menor ou igual a 10.';

	var_dump($retorno);	
	

?>
<?php
function verificar($valor_verificar) {
	$valor_anterior = 0;
	$valor_atual = 1;
	$pertence = 0;
	$fibbonacci = array($valor_anterior, $valor_atual);
	while ($valor_atual < $valor_verificar) {
		$valor_anterior_copia = $valor_anterior;
		$valor_anterior = $valor_atual;
		$valor_atual = $valor_anterior_copia + $valor_atual;
		array_push($fibbonacci, $valor_atual);
	}

	for ($i = 0; $i<sizeof($fibbonacci); $i++){
		if ($valor_verificar == $fibbonacci[$i]){
			echo "O numero " . $valor_verificar . " pertence a sequencia Fibbonacci";
			$pertence = 1;
			break;
		}
	}
	if($pertence == 0){
		echo "O numero " . $valor_verificar . " não pertence a sequencia Fibbonacci";
	}
}
//entrada de dados
verificar(13);
?>

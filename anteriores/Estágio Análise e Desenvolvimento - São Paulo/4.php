<?php
$regioes = array('SP' => 67836.43, 'RJ' => 36678.66, 'MG' => 29229.88, 'ES' => 27165.48, 'outros' =>19849.53);

$key = array_keys($regioes);
$val = array_values($regioes);
$soma = 0;
for($i = 0; $i < sizeof($val); $i++){
    $soma += $val[$i];
}

$regioes_porcentagem = array();

for($i = 0; $i < sizeof($val); $i++){
    $porcentagem = ($val[$i] / $soma) * 100;
    $regioes_porcentagem[$key[$i]] = $porcentagem;
}

print_r($regioes_porcentagem);
?>


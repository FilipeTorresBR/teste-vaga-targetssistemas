<?php 

//letra A
for($i = 1; $i<10;$i= $i+2){
    echo $i. "\n";
}
// O proximo elemento é o 9

//letra B
for($i = 1; $i<129; $i = $i * 2){
    echo $i. "\n";
}
// O proximo elemento é o 128

//letra C
for($i = 1; $i<8; $i++){
    echo $i * $i . "\n";
}
// O proximo elemento é o 49

//letra D
for($i = 2; $i<11; $i= $i+2){
    echo $i * $i . "\n";
}
// O proximo elemento é o 100



//letra E
$valor_anterior = 0;
$valor_atual = 1;
for($i = 2; $i<8; $i= $i+2){
    $valor_anterior_backup = $valor_anterior;
    $valor_anterior = $valor_atual;
    $valor_atual = $valor_anterior_backup + $valor_atual;
    
    echo $valor_atual . "\n";
}
// O proximo elemento é o 13

//letra F
/*Esta sequencia trata dos numeros que começam com a letra D, logo a proxima seria 200*/
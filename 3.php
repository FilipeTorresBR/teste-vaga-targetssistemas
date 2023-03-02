<?php
$json = file_get_contents('dados.json');
$json_data = json_decode($json,true);

$min = 22174.1664;
$max = 0;
$soma = 0;
$dias_media = 0;
$dias_uteis = 0;
foreach ($json_data as $key => $value) {
    foreach ($value as $key => $val) {
        if($key == "valor" && $val > 0.0){
            if($min > $val){
                $min = $val;
            }
            if($max < $val){
                $max = $val;
            }

            $soma += $val;
            $dias_uteis += 1;
        }
	}
}          
$media = $soma / $dias_uteis;

foreach ($json_data as $key => $value) {
    foreach ($value as $key => $val) {
        if($val > $media && $key == "valor" && $val != 0.0){
            $dias_media +=1;
        }
	}
}
echo "Minimo: $min; Maximo: $max; Dias acima da media: $dias_media";
?>


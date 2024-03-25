<?php
$palavra = "Filipe Torres";
$str_array = str_split($palavra);
for ($i=strlen($palavra) - 1; $i>=0; $i--){
    print_r($str_array[$i]);
}
?>
<?php
$palavra = "Filipe Torres";
$str_array = str_split($palavra);
for ($i=strlen($palavra); $i>=0; $i--){
    echo $str_array[$i];
}

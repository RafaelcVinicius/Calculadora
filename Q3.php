<?php
// tirar os valores menores que 20

$a = [0.5, 7, 2, 35, 3.5, 4, 40, 24];


for($i = 0; $i < 8; $i++ ) {
    if($a[$i] < 20){
    unset($a[$i]);
    }
}
print_r($a);
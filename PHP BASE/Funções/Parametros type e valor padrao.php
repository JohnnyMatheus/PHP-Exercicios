<?php

function somar(int $n1,int $n2, int $n3 = 0){
    $calc = $n1 + $n2 + $n3;
    return $calc;
}

$resultado = somar(1,2,9);
echo $resultado;
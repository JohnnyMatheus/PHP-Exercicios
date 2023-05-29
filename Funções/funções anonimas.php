<?php

$aumento = function($valor) {
    $porcento = 10 / 100;
    $calc = $valor * $porcento;
    $NovoSalario = $valor + $calc;
    return $NovoSalario;
};

echo $aumento(100);
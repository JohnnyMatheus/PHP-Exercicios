<?php

function somar($X,$Y){
    $Total = $X + $Y;
    return $Total;
}

$soma = somar(10,20);
echo $soma;

echo "<hr>";

function subtrair($X,$Y){
    $Total = $X - $Y;
    return $Total;

}

$subtracao = subtrair(10,5);
echo $subtracao;

echo "<hr>";

function multiplicar($X,$Y){
    $Total = $X * $Y;
    return $Total;
}

$multiplicar = multiplicar(5,5);
echo $multiplicar;

echo '<hr>';


function dividir($X,$Y){
    $Total = $X / $Y;
    return $Total;
}
$divisao = dividir(5,5);
echo $divisao;

echo "<hr>";

function teste($x,$y){
    $calc = $x + $y;
    return $calc;
}

$X = teste(1,1);
$Y = teste(2,2);
$Z = teste($X,$Y);

echo $Z;
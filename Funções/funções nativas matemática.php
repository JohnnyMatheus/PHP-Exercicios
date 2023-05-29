<?php

//Funções matematica PHP

$Absoluto = -8.4;
echo abs($Absoluto);

echo '<hr>';

//PI
echo pi();

echo '<hr>';


//arredonda para baixo
$numero = 2.7;

echo floor($numero);


echo '<hr>';


//arredonda para cima
$numero2 = 2.1;
echo ceil($numero2);

echo '<hr>';
//arredonda tanto para cima ou para baixo

$numero3 = 3.32323;  //outro exemplo 
echo round($numero3, 2); //mostrando duas casas decimais

echo "<br>";

$numero3 = 3.3;  //outro exemplo 
echo round($numero3, 2); 


echo '<hr>';

//Numeros aleatórios

$aleatorio = rand(0,9);
echo $aleatorio;
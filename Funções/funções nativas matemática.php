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
echo 'Numero aléatório: '.$aleatorio;

echo '<hr>';

/////////////////////////////////////////////////////

// Encontrar o maior número da lista
$lista = [1,2,3,4,5];
echo ('O maior numero da lista é: '.max($lista));
echo '<br>';
//encontrr o menor numero da lista
echo ('O menor nímero da lista é: '.min($lista));

/////////////////////////////////////////////////////
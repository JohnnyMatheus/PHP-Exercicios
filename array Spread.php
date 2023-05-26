<?php
//A PARTIR DO PHP 7.4 EM DIANTE 
echo "<h1>Exemplo 1</h1>";
$bolo1 = [
    'açúcar',// Posição 0
    'Farinha',//posição 1
    'ovo',//posição 2
    'leite',//posição 3
    'Fermento'//posição 4
];

$bolo2 = [
    ...$bolo1,
    'corante'//posição 5

];

echo $bolo2[5]."<br>";

////////////////////////////////////////////////////////////////////////////

//EXEMPLO 2
    echo "<h1>Exemplo 2</h1>";

//A PARTIR DO PHP 7.4 EM DIANTE 
$bolo3 = [
    'açúcar',//posição 2
    'Farinha', //posição 3
    'ovo', //posição 4
    'leite', //posição 5
    'Fermento'//posição
];

$bolo4 = [
    'agua',// Posição 0
    'vasilha',//posição 1
    ...$bolo3,
    'corante'//posição 7

];

echo $bolo4[5]."<br>";

////////////////////////////////////////////////


echo "<h1>Exemplo 3</h1>";

$lista1 = [
    "Um"."<br>",
    "Dois"."<br>",
    "Três"."<br>"
];

$lista2 = [
    "Quatro"."<br>",
    "Cinco"."<br>",
    "Seis"."<br>"
];
$lista3 = [...$lista1, 'Johnny',...$lista2];
print_r($lista3);
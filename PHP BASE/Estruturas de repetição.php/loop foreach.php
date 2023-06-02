<?php

//For each = Para cada
echo "<h1>EXEMPLO 1</h1>";
$igredientes = [
    'Açúcar',
    'Farinha de Trigo',
    'Ovo',
    'Leite',
    'Fermento em pó'
];

foreach($igredientes as $chave => $valor){
    echo "Item: ".$chave.": "."$valor"."<br>";
}


$igredientes = [
    'Açúcar',
    'Farinha de Trigo',
    'Ovo',
    'Leite',
    'Fermento em pó'
];

echo "<h1>EXEMPLO 2</h1>";

foreach($igredientes as $chave => $valor){
    echo "Item: ".($chave + 1).": "."$valor"."<br>";
}

echo "<h1>EXEMPLO 3 dentro de uma lista</h1>";

echo '<ul>';

foreach($igredientes as$valor){
    echo "<li>".$valor."</li>";
}

echo '</ul>';
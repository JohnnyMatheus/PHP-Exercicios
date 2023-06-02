<?php

//Condicional ternário = If de uma linha

// (condição) ? Resultado Positivo : Resultado Negativo; 
$idade = 18;
echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade'."<br>";

echo '<h1>Exemplo 2</h1>';


$idade2 = 19;
$menorIdade = ($idade2 < 18) ? 'menor de idade' : 'Maior de idade';
echo $menorIdade;


echo '<h1>Exemplo 3</h1>';


$idade3 = 19;
$menorIdade3 = ($idade3 < 18) ? true : false;
echo $menorIdade3;
if($menorIdade3){
    echo 'menor';
}else{
    echo 'Maior';
}
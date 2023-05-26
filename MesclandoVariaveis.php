<?php
//EXEMPLO 1
$nome = "Johnny";
$sobrenome = "Matheus";

$nomeCompleto = $nome.' '.$sobrenome;
echo $nomeCompleto."</br>";

//EXEMPLO 2
$nome2 = "Johnny";
$sobrenome2 = "Matheus";

$nomeCompleto2 = "$nome2 $sobrenome2";
echo $nomeCompleto2."</br>";


//EXEMPLO 3 

$nome3 = "Johnny";
$sobrenome3 = "Matheus";
$nomeCompleto3 = '$nome3 $sobrenome3'; //PHP vai entender que tudo que está na String será um valor literal, o que está colocando será o texto realmente
echo $nomeCompleto3."</br>";

//EXEMPLO 4 
$X1 = 15;
$Y2 = 20;
$Z1= $X1.$Y2; //concatenação de variaveis
echo $Z1."</br>";

//EXEMPLO 5
$X2 = 15;
$Y2 = 20;
$Z2= $X2+$Y2; 
echo $Z2."</br>";

//EXEMPLO 6
$X3 = '15';
$Y3 = 20;
$Z3= $X3+$Y3; //Ira somar X3 + Y3 php entende que deve somar
echo $Z3."</br>";

//EXEMPLO 7
$nome4 = "Johnny";
$sobrenome4 = "Matheus";
$nomeCompleto4 = $nome4;
$nomeCompleto4 .= $sobrenome4; // outros ex para matemática: .= | += | -= | /= | *=

echo $nomeCompleto4."</br>";

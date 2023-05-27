<?php
//EXEMPLO 1
echo "<h1>Exemplo 1</h1>";
$nome = 'Johnny';
$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : ' ';//SE SOBRENOME ESTA SETADO (EXISTIR) ESCREVE O NOME, SE NÃO EXITIR FICA VAZIO
echo $nomeCompleto;


//EXEMPLO 2 FORMA MAIS SIMPLES

echo "<h1>Exemplo 2</h1>";
$nome2 = 'Johnny';
$nomeCompleto2 = $nome2;
$nomeCompleto2 .= $sobrenome2 ?? ''; //se a variavel existir use ela mesma, caso contrario vazio
echo $nomeCompleto2;


//Exemplo 3

echo "<h1>Exemplo 3</h1>";

$nomeCompleto3 = $nome3 ?? 'Visitante';// se a variael existir use ela mesma, caso contrario escreva Visitante
$nomeCompleto3 .= $sobrenome3 ?? ''; //se a variavel existir use ela mesma, caso contrario vazio
echo $nomeCompleto3;
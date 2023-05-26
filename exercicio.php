<?php

$lista = [
    'nome' => 'Johnny Matheus',
    'idade' => 28,
    'atributos' => [
        'forca' => 100,
        'agilidade' => 200,
        'destreza'=> 300
    ],
    'vida' => 1000,
    'mana' => 928
];

echo "Nome: ".$lista['nome']."<br>";
echo "Idade: ".$lista['idade']."<br>";
echo "Atributo: ".$lista['atributos']['forca']."<br>";
echo "Atributo: ".$lista['atributos']['agilidade'];
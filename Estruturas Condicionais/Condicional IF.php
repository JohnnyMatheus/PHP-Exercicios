<?php

$idade = 100;

if($idade < 18){
    echo 'Menor de idade';
}
elseif($idade >=18 && $idade < 60) {
    echo 'Maior de Idade';
}
else{
    echo 'Idoso';
}
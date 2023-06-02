<?php

$data = '2023-06-01';

function horario($data){
    date_default_timezone_set(America/Sao_Paulo);
    $time = $data.' '.date('D');
    return $time;
}


echo horario();

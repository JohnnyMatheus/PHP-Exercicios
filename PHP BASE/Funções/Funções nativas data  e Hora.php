<?php
echo '<h1>tempo em milisegundos</h1>';
echo time();

echo '<hr>';

echo '<h1>Puxar tempo real dia (d) / mês (m) / ano (Y)  Hora(H): minutos(i): segundos(s); </h1>';
echo date('d/m/Y H:i:s'); //obs configurar no servidor apache para validar a hora da região onde esta o servidor
echo '<br>';

echo '<h1>||</h1>';
echo date('Y/m/d'); //padrão internacional
echo '<hr>';


echo '<h1>||</h1>';
$data = '2023-06-01';
$time = strtotime($data);
echo date('d / m / Y',$time);


echo '<hr>';



















echo '<h1></h1>';
echo '<h1></h1>';
echo '<h1></h1>';
echo '<h1></h1>';
echo '<h1></h1>';

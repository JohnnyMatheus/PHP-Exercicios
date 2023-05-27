<?php
echo '<h1>EXEMPLO CONTAGEM REGRESSIVA</h1>';

$numero1 = 10;

while($numero1 > -1 ){
    echo 'Numero: '.$numero1."<br>";
    $numero1  --;
}


echo '<h1>EXEMPLO CONTAGEM 0 A 9</h1>';
$numero2 = 0;

while($numero2 < 10 ){
    echo 'Numero: '.$numero2."<br>";
    $numero2++;
}

echo '<h1>EXEMPLO CONTAGEM 0 A 10</h1>';
$numero3 = 0;

while($numero3 <= 10 ){
    echo 'Numero: '.$numero3."<br>";
    $numero3++;
}
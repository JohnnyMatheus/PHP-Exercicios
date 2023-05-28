<?php
function contar(){
    for($n=0;$n<10;$n++){
        echo $n.'<br>';
    }
    echo '<hr>';
}
contar();
contar();

//Função falar

function falar(){
    echo 'Falou';
    echo"<hr>";
}

falar();

function latir(){
    echo 'AU AU AU <br>';
}

for($i = 0;$i<10;$i++){
    latir();
    
}
echo '<hr>';
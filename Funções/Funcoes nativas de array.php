<?php
echo '<h1>Contar quantos item tem na lista = count</h1>';
$lista = ['Sofia','Gabriel','Isabella','Lucas','Valentina','Miguel','Laura','Enzo','Alice','Pedro'];
echo 'Total de alunos: '.count($lista).'<br>';


$aprovados = ['Sofia','Gabriel','Isabella','Lucas','Valentina'];

$reprovados = array_diff($lista, $aprovados); //comapara quem não esta na lista de aprovados e mostra os reprovados
print_r($reprovados);


echo '<hr>';

//array filter
echo '<h1>Array filter</h1>';
$numeros = [10,20,24,91,18]; 
$filtrados = array_filter($numeros, function($item){
    if ($item < 30){
        return true;
    }else{
        return false;
    }
});

print_r($filtrados);

echo '<hr>';

//array map 
echo '<h1>Array map</h1>';
$numeros = [10,20,24,91,18]; 

$dobrados = array_map(function($item){
    return $item *2;
},$numeros);

print_r($dobrados);
echo '<br>';

echo '<hr>';
##############################################
echo '<h1>Count</h1>';
$lista = ['nome1','nome2','nome3','nome4'];
echo "TOTAL: ".count($lista);


echo '<hr>';

echo '<h1>array_pop remove o ultimo item da lista</h1>';
$numeros = [10,20,24,91,18]; 
array_pop($numeros); //remove o ultimo item da lista
print_r($numeros);

echo '<hr>';


echo '<h1>array_shift remove o primeiro item da lista</h1>';
$numeros = [10,20,24,91,18]; 
array_shift($numeros);
print_r($numeros);
echo '<hr>';

echo '<h1>in_array</h1>';
$numeros = [10,20,24,91,18]; 
if(in_array(10,$numeros)){ //verifica se tem o item no array
    echo 'EXISTE';
}else {
    echo 'Não Existe';
}

echo '<hr>';

$numeros = [10,20,24,91,18]; 
$posição - array_search(91,$numeros);




echo '<h1></h1>';
echo '<h1></h1>';
echo '<h1></h1>';
echo '<h1></h1>';
echo '<h1></h1>';


echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';

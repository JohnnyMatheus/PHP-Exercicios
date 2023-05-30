<?php
// retira os espaços
$nomeComespaco = '   Johnny   ';
$semespaco = trim($nomeComespaco);
echo $nomeComespaco.'<br>';
echo $semespaco.'<br>';
echo "Nome com espaços: ".strlen($nomeComespaco).'<br>'; // strlen -> conta quantos caracteres tem emuma string
echo 'Nome sem espaços: '.strlen($semespaco);
echo'<hr>';


echo '<h1>//Tranforma em  letras maiusculas</h1>';

$nome = 'Johnny Matheus';
echo strtoupper($nome)."<br>";

echo '<hr>';

echo '<h1>//Transforma letras em minusculo</h1>';
 $nome = 'Johnny Matheus';
 echo strtolower($nome);

echo '<hr>';

 //Alterar nome
 echo '<h1>Alterar nome</h1>';
 $Aluno = 'Aluno = Nome';
 $alterado = str_replace('Nome','Johnny',$Aluno);// procura a palavra nome, subistitua por Johnny.
 echo $alterado;

 echo '<hr>';

echo '<h1>Pegar apenas uma parte da string</h1>';

 $nomeCompleto = 'Johnny Matheus';
 $nome = substr($nomeCompleto, 0,5);
 echo $nome;

echo '<br>';
echo '<hr>';



echo '<h1>
//Posição
//strpos verifica se tem determinada sentença em uma palavra;
</h1>';
$nomeCompletoW = 'Johnny Matheus';
$posicao = strpos($nomeCompletoW,'Jo');
if($posicao > -1){
    echo 'Achou';
}else {
    echo 'Não achou';
}

echo '<br>';
echo '<hr>';

echo '<h1>//Transforma a primeira letra em maiuscula</h1>';
$nomeCompleto = 'johnny';
echo ucfirst($nomeCompleto);

echo '<br>';
echo '<hr>';

echo '<h1>//Transforma as letras de cada palavra em maiuscula</h1>';

$nomeCompleto = 'aluno johnny matheus ';
echo ucwords($nomeCompleto);


echo '<br>';
echo '<hr>';

echo '<h1>separa variavel tipo string em um array </h1>';
$nomeCompleto = 'aluno johnny matheus';
$nomes = explode(' ',$nomeCompleto);

print_r($nomes);


echo '<br>';
echo '<hr> </hr>';
$numero = 12913.12;
echo 'R$ '.number_format($numero, 2,',','.');
echo '<br>';
echo 'R$ '.number_format($numero, 2,',','');


echo '<br>';
echo '<h1> </h1>';
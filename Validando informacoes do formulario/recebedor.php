<?php

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);//NÃO RODARA COD MALICIOSO TRANSFORMA EM TEXTO
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);

if($nome && $email && $idade){
    echo 'Nome: '.$nome.'</br>';
    echo 'E-mail: '.$email.'</br>';
    echo 'Idade: '.$idade.'</br>';

}else{
    header("Location: index.php");
    exit;
}

//EXEMPLOS VALIDATE

//FILTER_VALIDADE_EMAIL ->VERIFICA SE É UM E-MAIL
//FILTER_VALIDATE_IP -> VERIFICA SE É IP
//FILTER_VALIDATE_INT -> VERIFICA SE ENVIOU NUMEROS INTEIROS SE SIM -> ENVIA NUMERO | SE NAO -> VAZIO
//FILTER_VALIDADE_URL -> PARA SABER SE MANDOU UM LINK MESMO


//EXEMPLOS SANITIZE 
//FILTER_SANITIZE_EMAIL -> 
//FILTER_SANITIZE_NUMBER_INT ->
//FILTER_SANITIZE_STRING ->
//FILTER_SANITIZE_SPECIAL_CHARS
//FILTER_SANITIZE_URL
//FILTER_SANITIZE_NUMBER_INT
//FILTER_SANITIZE_NUMBER_FLOAT

/*
Sanitização refere-se ao processo de remover ou escapar caracteres indesejados ou
 potencialmente perigosos de uma entrada de dados. Isso ajuda a prevenir ataques
de injeção de código malicioso, como ataques de SQL ou XSS (cross-site scripting).
A sanitização garante que os dados recebidos sejam tratados como dados seguros antes
 de serem armazenados ou exibidos.
 Em resumo, a sanitização trata de limpar os dados, removendo qualquer 
 coisa que possa ser prejudicial ou causar problemas de segurança.


*/




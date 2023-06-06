<?php
session_start();



$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);//NÃO RODARA COD MALICIOSO TRANSFORMA EM TEXTO
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);

if($nome && $email && $idade){
    $expiracao = time() + (86400 * 30);
    setcookie('nome',$nome,$expiracao);

    echo 'Nome: '.$nome.'</br>';
    echo 'E-mail: '.$email.'</br>';
    echo 'Idade: '.$idade.'</br>';

}else{
    $_SESSION['aviso'] = 'Preencha os itens corretamente!';
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

 Validate
 
A validação, por outro lado, é o processo de verificar se os dados recebidos estão corretos e
 atendem a determinados critérios esperados.
A validação é usada para garantir que os dados estejam no formato correto, tenham um comprimento adequado,
satisfaçam restrições específicas (como números dentro de um determinado intervalo) e assim por diante.
A validação ajuda a garantir a integridade e a consistência dos dados.
Por exemplo, se você recebe um número de telefone de um formulário, pode usar 
funções de validação para verificar se o número de telefone está no formato correto e contém apenas dígitos.


*/




<?php
session_start();
require('header.php');

if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    echo $_SESSION['aviso'] ='';
}
?>

<a href="apagar.php">Apagar cookie</a>


<form method='POST' action="recebedor.php">
    <label>
        Nome:</br>
            <input type="text" name="nome">
    </label>
    </br>
    <label>
        E-mail:</br>
            <input type="e-mail" name="email">
    </label>
    </br>
    <label>
        Idade:</br>
            <input type="text" name="idade">
    </label>
    </br>
    </br>
        <input type="submit" value="Enviar">
</form>
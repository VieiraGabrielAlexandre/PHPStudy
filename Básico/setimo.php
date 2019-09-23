<?php
    $idade = $_POST["dado1"];
    $nome = $_POST["dado2"];
    if ($idade >= 18 && $nome == 'Gabriel')
    {
        echo "Você é maior de idade, pode entrar !";
    }
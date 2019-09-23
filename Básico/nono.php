<?php
    $idade = $_POST["dado1"];
    $acompanhante = $_POST["dado2"];

    if ($idade >= 18)
    {
        echo "Você possui $idade, portanto pode entrar e curtir !";
    } else if ($idade >= 16 && $acompanhante >= 1)
    {
        echo "Você possui $idade, porém está acompanhando de uma pessoa.<br>Pode entrar e curtir !";
    } else {
        echo "Não pode entra !";
    }
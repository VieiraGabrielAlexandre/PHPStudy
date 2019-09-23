<?php  
    $dado1 = $_POST ["dado1"];
    $dado2 = $_POST ["dado2"];

    $soma = $dado1 + $dado2;
    echo "Soma: ".$soma;
    $multiplicacao = $dado1 * $dado2;
    echo "<br>Multiplicação: ".$multiplicacao;
    $divisao = $dado1 / $dado2;
    echo "<br>Divisão: ".$divisao;
    $subtracao = $dado1 - $dado2;
    echo "<br>Subtração: ".$subtracao;
    $aocubo = $dado1 ** $dado2;
    echo "<br>Ao cubo: ".$aocubo;
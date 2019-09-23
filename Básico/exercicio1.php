<?php
    $altura = $_POST["dado2"];
    $peso = $_POST["dado1"];

    $imc = number_format($peso / ($altura * $altura),2,'.','');

    if ($imc <= 18.5){
        echo "IMC= $imc<br>";
        echo "Abaixo do peso";
    }
    if ($imc >= 18.5 && $imc<=24.9){
        echo "IMC= $imc<br>";
        echo "Peso normal";
    }
    if ($imc >= 25 && $imc <= 29.9){
        echo "IMC= $imc<br>";
        echo "SobrePeso";
    }
    if ($imc >= 30 && $imc <= 34.9){
        echo "IMC= $imc<br>";
        echo "OBESO 1";
    }
    if ($imc >= 35 && $imc <= 39.9){
        echo "IMC= $imc<br>";
        echo "OBESO 2";
    }
    if ($imc >= 40){
        echo "IMC= $imc<br>";
        echo "OBESÃO";
    }
    
<?php
    //$numero = $_POST["dado2"];
    $limite = $_POST["dado1"];

    for ($i = 0; $i <= $limite; $i ++){
        if ($i % 2 == 0){
            echo "$i é par !<br>";
        }
    }
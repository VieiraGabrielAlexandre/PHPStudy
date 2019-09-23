<?php   
    $listaIdade = [10,20,30,40,50,60];
    $tamanho = count($listaIdade);

    for ($i = 0; $i < $tamanho; $i++){
        echo "$listaIdade[$i]<br>".PHP_EOL;
    }
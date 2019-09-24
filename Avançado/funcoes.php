<?php
    function multiplica($numero){
        return $numero * $numero;
    }

    function adiciona($numero){
        return $numero + $numero;
    }

    function divide ($numero){
        return $numero / $numero;
    }

    function subtrai ($numero){
        return $numero - $numero;
    }

    $numero = 10;

    multiplica($numero);
    adiciona($numero);
    divide($numero);
    subtrai($numero);

    echo multiplica($numero)."<br>";
    echo adiciona($numero)."<br>";
    echo divide($numero)."<br>";
    echo subtrai($numero)."<br>";


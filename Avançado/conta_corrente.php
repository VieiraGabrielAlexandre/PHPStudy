<?php
    $conta1 = [
        'titular' => "Gabriel",
        'saldo' => 4000
    ];
    $conta2 = [
        'titular' => "Julinana",
        'saldo' => 8000
    ];
    $conta3 = [
        'titular' => "Maria",
        'saldo' => 350.80
    ];

    $contasCorrentes = [$conta1, $conta2, $conta3];
    for ($i = 0; $i<=2;$i++){
        echo "Titular: ";
        echo $contasCorrentes[$i]['titular'];
        echo "<br>Saldo: ";
        echo $contasCorrentes[$i]['saldo'];
        echo "<br>";

    }
<?php
    $contasCorrentes = [
        '469.858.818-90' => [
            'titular' => "Gabriel",
            'saldo' => 4000
        ],
        '123.456.789-10' => [
            'titular'=> "Julinana",
            'saldo' => 8000
        ],
        '123.456.789-11' => [
            'titular' => "Maria",
            'saldo' => 350.80
        ]
    ];

    $contasCorrentes[] = [
        'titular'=>'Teste',
        'saldo' =>10000
    ];

    foreach($contasCorrentes as $cpf => $conta){
        echo $cpf." ".$conta['titular']."<br>";
    }
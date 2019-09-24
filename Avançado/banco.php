<?php

function exibeMensagem(string $mensagem) : string{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valor)
{
    if ($valor > $conta['saldo']){
        exibeMensagem("Falha no saque.<br>");
    } else {
        exibeMensagem("Sucesso<br>");
        $conta['saldo']-=$valor;   
        exibeMensagem($conta['saldo']."<br>");
    }

    return $conta;
}

function depositar(array $conta, float $valor) : array
{
    if ($valor > 0){
        $conta['saldo'] += $valor;
        exibeMensagem("Valor depositado com sucesso<br>");
    } else {
        exibeMensagem("Deposito menor que 0<br>");
    }

    return $conta;
}

$contasCorrentes = [
    '1' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '2' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '3' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


$contasCorrentes['1'] = sacar($contasCorrentes['1'],500);
$contasCorrentes['3'] = depositar($contasCorrentes['3'], 100);

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf." ".$conta['titular']." ".$conta['saldo']."<br>";
}
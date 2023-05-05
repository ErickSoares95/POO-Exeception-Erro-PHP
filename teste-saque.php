<?php

use Erick\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Erick\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);
try {
    $conta->saca(600);
} catch (\Erick\Modelo\Conta\SaldoInsuficienteException $e) {
    echo "Você não tem saldo para realizar este saque." . PHP_EOL;
    echo $e->getMessage();
    echo $e->getLine();
    echo $e->getCode();
    echo $e->getTrace();
}

echo $conta->recuperaSaldo();

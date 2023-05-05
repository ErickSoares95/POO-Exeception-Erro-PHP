<?php

use Erick\Modelo\CPF;
use Erick\Modelo\Funcionario\Diretor;
use Erick\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new \Erick\Modelo\Funcionario\Gerente(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');

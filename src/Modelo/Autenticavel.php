<?php

namespace Erick\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}

<?php 

function funcao1()
{
    echo "Inicio função 1" . PHP_EOL;

    //RuntimeExcpetion
    try {
        $arrayFixo = new SplFixedArray(2);
        $arrayFixo[3] = "Valor";
        $divisao = intdiv(5, 0);
    } catch (DivisionByZeroError | RuntimeException $e) {
        $e->getMessage();
        $e->getLine();
        $e->getTraceAsString();
        $e->getCode();
    }

    funcao2();

    echo "Saindo função 2"; PHP_EOL;
}

function funcao2()
{
    echo "Inicio função 1" . PHP_EOL;
    for ($i=1; $i <= 5; $i++) { 
        echo $i . PHP_EOL;
    }
    echo "Bye função 2";    
}

echo "Main MTF!" . PHP_EOL;

    funcao1();

echo "Finish MTF HollyShit";
<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $exception){
        echo(
            PHP_EOL . 
            "Erro " . $exception->getCode() . ": " . $exception->getMessage() . " na linha " . $exception->getLine() . PHP_EOL .
            $exception->getTraceAsString() . PHP_EOL .
            PHP_EOL
        );
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $exception = new RuntimeException("Erro genérico", 500);
    throw $exception;
    
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;

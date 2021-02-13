<?php namespace Desafio ;

use Exception;
?>

<div class="titulo">Desafio intdiv()</div>

<?php

class NaoInteiroException extends Exception{}

function intdiv($num1, $num2)
{
    if ($num2 == 0) {
        throw new \DivisionByZeroError('Divisão por zero!');
    }

    $resultado = $num1 % $num2;
    if ($resultado > 0) {
        throw new NaoInteiroException('A divisão dos numeros não da um numero inteiro!!');
    }

    return "O resultado é: " . $num1 / $num2;
}

try {
    echo intdiv(8, 2);
} catch (NaoInteiroException $e) {
    echo $e->getMessage();
}

echo "<br>" . \intdiv(8, 3);

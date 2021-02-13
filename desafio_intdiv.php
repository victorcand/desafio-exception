<?php namespace Desafio ?>
<div class="titulo">Desafio intdiv()</div>

<?php
class Excessoes extends Exception
{
    public function __construct($message, $code = 0, $previus = null)
    {
        parent::__construct($message, $code, $previus);
    }
}

function intdiv($num1, $num2)
{
    $num1 / $num2;
    if ($num2 == 0) {
        throw new Excessoes('Divisão por zero!');
    }
    $resultado = $num1 % $num2;
    if ($resultado != 0) {
        throw new Excessoes('A divisão dos numeros não da um numero inteiro!!');
    }

    if ($resultado == 0) {
        echo "O resultado é: " . $num1 / $num2;
    }
}

try {
    $teste->intdiv(8, 0);
} catch (Excessoes $e) {
    echo $e->getMessage();
}

echo "<br>" . \intdiv(8, 3);


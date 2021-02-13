<div class="titulo">Erros Personalizados</div>

<?php

class FaixaEtariaException extends Exception
{
    public function __construct($massage, $code = 0, $previus = null)
    {
        parent::__construct($massage, $code, $previus);
    }
}

function calcularTempoAposentadoria($idade)
{
    if ($idade < 18) {
        throw new FaixaEtariaException('Falta muito para se aposentar!');
    }

    if ($idade > 70) {
        throw new FaixaEtariaException('Ja deveria estar aposentado!');
    }
    return 70 - $idade;
}

$idadesAvaliadas = [15, 30, 60, 80];

foreach ($idadesAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes<br>.";
    } catch (FaixaEtariaException $e) {
        echo "Não foi possivel calcular para $idade anos. <br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}

echo "Fim!";
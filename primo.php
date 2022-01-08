<?php
function Primo($inicial, $final)
{
    $arrayPrimos = [];

    function DivisaoExata($dividendo, $divisor)
    {
        return $dividendo % $divisor === 0;
    }

    $dividendoAtual = $inicial + 1;
    for ($dividendoAtual; $dividendoAtual < $final; $dividendoAtual++) {
        $quantidadeDivisores = 0;

        $divisorAtual = 1;
        for ($divisorAtual; $divisorAtual <= $dividendoAtual; $divisorAtual++) {

            if (DivisaoExata($dividendoAtual, $divisorAtual)) {
                $quantidadeDivisores++;
            }
        }

        if ($quantidadeDivisores === 2) {
            array_push($arrayPrimos, $dividendoAtual);
        }
    }

    return $arrayPrimos;
}

var_dump(Primo(7,15));
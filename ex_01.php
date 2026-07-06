<?php

// (x²+y²) / (x+y)

function calcularFormula($x, $y)
{

    if ($x + $y === 0) {
        return "Não é possível dividir por 0";
    }
    $resultado = ((pow($x, 2) + pow($y, 2)) / ($x + $y));
    return $resultado;


}
echo ("Os números são 10 e 10, o resultado é ");
echo calcularFormula(10, 10);
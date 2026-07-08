<?php

function calcularDesconto($valorCompra){
    $valorDescontado = 0;
    $descontoAplicado = 0;
    $porcentagemDesconto = 0;
    if ($valorCompra <= 100){ //Sem Desconto
        $valorDescontado = $valorCompra;
        echo ("o valor original é $valorCompra <br>");
        $porcentagemDesconto = (1 - $descontoAplicado) * 100;
        echo ("o desconto aplicado foi de $porcentagemDesconto % <br>");
        return "o valor descontado é: " . $valorDescontado;
    }else if ($valorCompra < 500){
        $descontoAplicado = 0.9; //Desconto de 10%
        $valorDescontado = $valorCompra * $descontoAplicado;
        echo ("o valor original é $valorCompra <br>");
        $porcentagemDesconto = (1 - $descontoAplicado) * 100;
        echo ("o desconto aplicado foi de $porcentagemDesconto % <br>");
        return "o valor descontado é: " . $valorDescontado;
    }else if ($valorCompra < 1000){
        $descontoAplicado = 0.8; //Desconto de 20%
        $valorDescontado = $valorCompra * $descontoAplicado;
        echo ("o valor original é $valorCompra <br>");
        $porcentagemDesconto = (1 - $descontoAplicado) * 100;
        echo ("o desconto aplicado foi de $porcentagemDesconto % <br>");
        return "o valor descontado é: " . $valorDescontado;
    }else if ($valorCompra > 1000){
        $descontoAplicado = 0.7; //Desconto de 30%
        $valorDescontado = $valorCompra * $descontoAplicado;
        echo ("o valor original é $valorCompra <br>");
        $porcentagemDesconto = (1 - $descontoAplicado) * 100;
        echo ("o desconto aplicado foi de $porcentagemDesconto % <br>");
        return "o valor descontado é: " . $valorDescontado;
    }
}

echo calcularDesconto(300);
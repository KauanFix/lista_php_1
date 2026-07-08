<?php

function analisarNumero(int $numero)
{
    if (!is_int($numero)){
        return "o número não é inteiro";
    }

    $ParImpar = "";
    if ($numero % 2 === 0) {
        $ParImpar = "Par";
    } else {
        $ParImpar = "Impar";
    }

    $Primo = "";
    $Divisores = 0;
    if ($numero === 1) {
        $Primo = "É primo!";
    } else {
        for ($count = 2; $count <= sqrt($numero); $count++) {
            if ($numero % $count == 0) {
                $Divisores++;
            }
        }
        if ($Divisores > 0){
            $Primo = "Não é Primo!";
        }else{
            $Primo = "É primo!";
        }
    }

    $Perfeito = "";
    $somaDivisores = 0;
    for($i = 1; $i <= $numero / 2; $i ++){
        if($numero % $i == 0){
            $somaDivisores += $i;
        }
    }
    if($somaDivisores === $numero){
        $Perfeito = "É perfeito!";
    }else{
        $Perfeito = "Não é perfeito";
    }


    return[$numero, $ParImpar, $Primo, $Perfeito];
}

$resultado = analisarNumero(6);

echo "o número é: $resultado[0]<br>";

echo "$resultado[1]<br>";
echo "$resultado[2]<br>";
echo "$resultado[3]<br>";
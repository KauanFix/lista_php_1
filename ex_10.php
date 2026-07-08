<?php

function calcularMedia($vetorNota){
    $maiorNota = 0;
    $menorNota = INF;
    $quantiaNotas = count($vetorNota);
    $somaNotas = 0;
    $situacao = "";

    for ($i = 0; $i < $quantiaNotas; $i++){
        if($vetorNota[$i] > $maiorNota){
            $maiorNota = $vetorNota[$i];
        }else if($vetorNota[$i] < $menorNota){
            $menorNota = $vetorNota[$i];
        }
        $somaNotas += $vetorNota[$i];
    }
    $media = $somaNotas / $quantiaNotas;

    if ($media < 5){
        $situacao = "Reprovado";
    }else if($media < 7){
        $situacao = "Recuperação";
    }else if($media>7){
        $situacao = "Aprovado";
    }

    return[$maiorNota, $menorNota, $media, $situacao];
}
$notas = [8, 5, 6, 10];
$resultado = calcularMedia($notas);

print_r($notas);
echo "<br>Maior Nota: $resultado[0]<br>";
echo "Menor Nota: $resultado[1]<br>";
echo "Média: $resultado[2]<br>";
echo "Situação: $resultado[3]<br>";
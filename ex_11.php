<?php

function formatarTexto($string){
    $textoMaiusculo = strtoupper($string);
    $textoMinusculo = strtolower($string);
    $primeiraMaiuscula = ucwords($string);
    $quantidadeCaracteres = strlen($string);

    return[$textoMaiusculo, $textoMinusculo, $primeiraMaiuscula, $quantidadeCaracteres];
}
$texto = "O professor Icaro é muito legal :)";
$resultado = formatarTexto($texto);
echo "O texto original é: $texto <br>";
echo "<br>TUDO MAIUSCULO: $resultado[0]<br>";
echo "tudo minusculo: $resultado[1]<br>";
echo "Primeira Letra Maiuscula: $resultado[2]<br>";
echo "Quantidade de Caracteres: $resultado[3]<br>";
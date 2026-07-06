<?php

function gerarSenha($quantiaCaracteres){
    $minusculas = "abcdefghijklmnopqrstuvwxyz";
    $maiusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numeros = "1234567890";
    $simbolos = "-+=*$#@!%&_?";

    $senha1 = substr( str_shuffle($minusculas), 0, $quantiaCaracteres/4);
    $senha2 = substr( str_shuffle($maiusculas), 0, $quantiaCaracteres/4);
    $senha3 = substr( str_shuffle($numeros), 0, $quantiaCaracteres/4);
    $senha4 = substr( str_shuffle($simbolos), 0, $quantiaCaracteres/4);

    $senhaFinal = $senha1 . $senha2 . $senha3 . $senha4;
    return $senhaFinal;
}

echo gerarSenha(1700000);
<?php

function analisarTexto($string){
    $quantiaPalavras = str_word_count($string);
    $quantiaEspacos = substr_count($string, " ");
    $quantiaCaracteres = strlen($string) - $quantiaEspacos;

    $string = strtolower($string);

    $vogal = 0;
    $consoante = 0;

    for($i = 0; $i < strlen($string); $i++){
        if($string[$i] == 'a' || $string[$i] == 'e' || $string[$i] == 'i' || $string[$i] == 'o' || $string[$i] == 'u'){
            $vogal ++;
        }else{
            $consoante ++;
        }
    }
    
    $consoante -= $quantiaEspacos;

    echo ("Frase Original: $string");
    echo("<br>");
    echo ("quantidade de palavras: $quantiaPalavras");
    echo("<br>");
    echo ("quantidade de caracteres: $quantiaCaracteres");
    echo("<br>");
    echo ("quantidade de vogais: $vogal");
    echo("<br>");
    echo ("quantidade de consoantes: $consoante");
}

analisarTexto("Oh vou te contar algo biologico");
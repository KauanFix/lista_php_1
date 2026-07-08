<?php

function ordenarNomes($nomes){
    $nomes = str_replace(' ', '', $nomes);
    $lista = explode(",", $nomes);
    sort($lista);
    $nomesOrdenados = implode(", ", $lista);
    return $nomesOrdenados;
}

echo "Os nomes ordenados são: ";
echo ordenarNomes("Davi, Lucas, Caio, Mafra");
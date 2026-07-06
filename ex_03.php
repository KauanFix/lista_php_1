<?php

function mascararCPF($cpf){
    if (strlen($cpf) != 11){
        return "CPF inválido";
    }
    for($i = 0; $i < 7; $i++){
        $numero = "*";
        $cpf[$i] = $numero;
        
    }return $cpf;
}
echo ("CPF mascarado: ");
echo mascararCPF("12345678910");
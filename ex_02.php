<?php

function inverterTexto($string){
   $textoInvertido = strrev($string); 
   $quantiaLetras = strlen($string); 
 

   echo ("Texto Original = $string");
   echo ("<br>");
   echo ("Texto Invertido = $textoInvertido");
   echo ("<br>");
   echo ("quantidade de letras = $quantiaLetras") ;
}

inverterTexto("Icaro");
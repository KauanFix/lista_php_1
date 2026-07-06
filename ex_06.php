<?php

function converterTemperatura($temp, $escalaInicial, $escalaFinal)
{
    $valorConvertido = 0;
    if ($escalaInicial === 'Celsius') {
        if ($escalaFinal === 'Fahrenheit') {
            $valorConvertido = (($temp * 1.8) + 32);
        }
        if ($escalaFinal === 'Kelvin') {
            $valorConvertido = ($temp + 273.15);
        }
    }
    if ($escalaInicial === 'Fahrenheit') {
        if ($escalaFinal === 'Celsius') {
            $valorConvertido = ($temp - 32) * (5 / 9);
        }
        if ($escalaFinal === 'Kelvin') {
            $valorConvertido = ($temp - 32) * (5 / 9) + 273.15;
        }
    }
    if ($escalaInicial === 'Kelvin') {
        if ($escalaFinal === 'Celsius') {
            $valorConvertido = $temp - 273.15;
        }
        if ($escalaFinal === 'Fahrenheit') {
            $valorConvertido = ($temp - 273.15) * 1.8 + 32;
        }
    }
    return $valorConvertido;
}

echo converterTemperatura(77,'Fahrenheit', 'Celsius');
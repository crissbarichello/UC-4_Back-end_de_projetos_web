<?php

$valor = $_POST['calculadora'] ?? '';

function calcularGorjeta($valor) {
       $gorjeta = $valor * 0.10;        
    return $gorjeta;
        
}
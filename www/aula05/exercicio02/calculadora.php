<?php

$valor = $_POST['calculadora'] ?? '';

function calcularGorjeta($valor) {
                
    return $valor * 0.10;
        
}
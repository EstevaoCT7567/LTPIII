<?php
//8 – Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 9%.

$valor = 500;
$desconto = 9;
$calcular = $valor - ($valor * ($desconto/100));

echo "$valor com 9% de desconto é: " . $calcular; 
?>
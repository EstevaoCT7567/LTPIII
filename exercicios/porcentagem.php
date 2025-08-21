<?php
//3 – Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor.
//4 – Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.

$valor = 500;
$percentual1 = 15;
$percentual2 = 5;
$percentual3 = 50;
$calcular1 = ($valor / 100) * $percentual1;
$calcular2 = ($valor / 100) * $percentual2;
$calcular3 = ($valor / 100) * $percentual3;
$calcular4 = ($valor / 100);

echo "$valor/100 é: " . $calcular4; 
echo '<br>';
echo "15% de $valor é: " . $calcular1; 
echo '<br>';
echo "5% de $valor é: " . $calcular2; 
echo '<br>';
echo "50% de $valor é: " . $calcular3; 
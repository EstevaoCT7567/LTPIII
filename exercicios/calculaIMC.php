<?php
//7 – Escreva um algoritmo que leia a altura e o peso de uma pessoa, calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário.

$altura = 2.0; 
$peso = 87; 
$IMC = $peso / ($altura*$altura);

echo "Calculo do IMC: " . $IMC;
?>
<?php
//6 – Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e exiba para o usuário a velocidade em km/h.

$distancia = 150; 
$tempo = 50; 
$velocidadeMedia = $distancia / $tempo;
$velocidadeKmh = $velocidadeMedia * 3.6;

echo "A velocidade média em m/s: " . $velocidadeMedia . " m/s";
echo '<br>';
echo "A velocidade média em km/h: " . $velocidadeKmh . " km/h";
?>
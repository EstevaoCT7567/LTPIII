<?php

// Aluno -> Aprovado ou Reprovado
// 4 avaliações, cada um valendo até 10 pontos
// Aprovado média >=6.0
// Se não ele esta reprovado

$n1 = 6.0;
$n2 = 6.0;
$n3 = 6.0;
$n4 = 6.0;
$media = ($n1+$n2+$n3+$n4)/4;

//if ($media >= 6.0) {
//    echo "Aluno está aprovado";
//}else {
//    echo "Aluno está reprovado";
//}

echo ($media >= 6.0) ? "Sua média é: $media Aprovado" : "Sua média é: $media Reprovado";
<?php

// Aluno -> Aprovado ou Reprovado
// 4 avaliações, cada um valendo até 10 pontos
// Aprovado média >=6.0
// Se não ele esta reprovado

//$n1 = 6.0;
//$n2 = 6.0;
//$n3 = 6.0;
//$n4 = 6.0;
//$media = ($n1+$n2+$n3+$n4)/4;

//if ($media >= 6.0) {
//    echo "Aluno está aprovado";
//}else {
//    echo "Aluno está reprovado";
//}
//echo ($media >= 6.0) ? "Sua média é: $media Aprovado" : "Sua média é: $media Reprovado";


// Verifica se os dados foram enviados via POST
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe as notas e converte para float
    //$nota1 = floatval($_POST['nota1']);
    //$nota2 = floatval($_POST['nota2']);
    //$nota3 = floatval($_POST['nota3']);
    //$nota4 = floatval($_POST['nota4']);

    // Calcula a média
    //$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    // Exibe a média
    //echo "<h1>Resultado</h1>";
    //echo "<h2>Média final: " . number_format($media, 2) . "</h2>";

    // Mensagem de aprovação ou reprovação
    //if ($media >= 6) {
        //echo "<p>Aprovado.</p>";
    //} else {
        //echo "<p>Reprovado.</p>";
    //}
    
//} else {
    //echo "<p>Nenhuma nota foi enviada.</p>";
//}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): 
            // Recebe as notas e converte para float
            $nota1 = floatval($_POST['nota1']);
            $nota2 = floatval($_POST['nota2']);
            $nota3 = floatval($_POST['nota3']);
            $nota4 = floatval($_POST['nota4']);

            // Calcula a média
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        ?>
            <h1>Resultado</h1>
            <h2>Média final: <?= number_format($media, 2) ?></h2>
            <?php if ($media >= 6): ?>
                <p class="aprovado">Aprovado</p>
            <?php else: ?>
                <p class="reprovado">Reprovado</p>
            <?php endif; ?>
        <?php else: ?>
            <p>Nenhuma nota foi enviada.</p>
        <?php endif; ?>

        <a href="index.html">Voltar</a>
    </div>
</body>
</html>

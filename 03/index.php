<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>
</head>
<body>
    <h1>Calculador de média Final</h1>
    <div>
    <form method="post" action="resultado.php">
            <div>
                <label for="nota1">Nota 1:</label>
                <input type="number" name="nota1" id="nota1" step="0.01" required><br><br>
            </div>
            <div>
                <label for="nota2">Nota 2:</label>
                <input type="number" name="nota2" id="nota2" step="0.01" required><br><br>
            </div>
            <div>
                <label for="nota3">Nota 3:</label>
                <input type="number" name="nota3" id="nota3" step="0.01" required><br><br>
            </div>
            <div>
                <label for="nota4">Nota 4:</label>
                <input type="number" name="nota4" id="nota4" step="0.01" required><br><br>
            </div>
            <div>
                <input type="submit" value="Calcular"><br><br>
            </div>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Percentuais</title>
</head>
<body>
    <form method="post" action="">
        <label for="valor">Digite um valor:</label><br>
        <input type="number" id="valor" name="valor"><br><br>
        <input type="submit" value="Calcular Percentuais">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lê o valor do formulário
        $valor = $_POST['valor'];

        // Calcula 5% e 50% do valor
        $percentual_5 = $valor * 0.05;
        $percentual_50 = $valor * 0.50;

        // Exibe os resultados para o usuário
        echo "<p>5% de " . $valor . " é: " . $percentual_5 . "</p>";
        echo "<p>50% de " . $valor . " é: " . $percentual_50 . "</p>";
    }
    ?>
</body>
</html>
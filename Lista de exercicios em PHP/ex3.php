<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de 15%</title>
</head>
<body>
    <form method="post" action="">
        <label for="valor">Digite um valor:</label><br>
        <input type="number" id="valor" name="valor"><br><br>
        <input type="submit" value="Calcular 15%">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lê o valor do formulário
        $valor = $_POST['valor'];

        // Calcula 15% do valor
        $percentual = $valor * 0.15;

        // Exibe o resultado para o usuário
        echo "<p>15% de " . $valor . " é: " . $percentual . "</p>";
    }
    ?>
</body>
</html>
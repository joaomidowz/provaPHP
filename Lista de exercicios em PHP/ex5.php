<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Quadrados</title>
</head>
<body>
    <form method="post" action="">
        <label for="numero1">Digite o primeiro número:</label><br>
        <input type="number" id="numero1" name="numero1"><br><br>
        
        <label for="numero2">Digite o segundo número:</label><br>
        <input type="number" id="numero2" name="numero2"><br><br>
        
        <input type="submit" value="Calcular Quadrados e Somar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lê os números do formulário
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        // Calcula o quadrado de cada número
        $quadrado1 = $numero1 * $numero1;
        $quadrado2 = $numero2 * $numero2;

        // Soma os quadrados
        $soma_dos_quadrados = $quadrado1 + $quadrado2;

        // Exibe o resultado para o usuário
        echo "<p>O quadrado de " . $numero1 . " é: " . $quadrado1 . "</p>";
        echo "<p>O quadrado de " . $numero2 . " é: " . $quadrado2 . "</p>";
        echo "<p>A soma dos quadrados é: " . $soma_dos_quadrados . "</p>";
    }
    ?>
</body>
</html>
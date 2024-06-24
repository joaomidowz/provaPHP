<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Média</title>
</head>
<body>
    <form method="post" action="">
        <label for="val1">Digite o primeiro valor:</label><br>
        <input type="number" id="val1" name="val1"><br><br>

        <label for="val2">Digite o segundo valor:</label><br>
        <input type="number" id="val2" name="val2"><br><br>

        <label for="val3">Digite o terceiro valor:</label><br>
        <input type="number" id="val3" name="val3"><br><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lê os três números do formulário
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        $val3 = $_POST['val3'];

        // Calcula a média dos três números
        $media = ($val1 + $val2 + $val3) / 3;

        // Exibe a média para o usuário
        echo "<p>A média dos três valores é: " . $media . "</p>";
    }
    ?>
</body>
</html>
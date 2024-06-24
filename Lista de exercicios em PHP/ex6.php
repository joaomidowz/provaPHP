<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Velocidade</title>
</head>
<body>
    <form method="post" action="">
        <label for="velocidade_ms">Digite a velocidade em m/s:</label><br>
        <input type="number" id="velocidade_ms" name="velocidade_ms"><br><br>

        <label for="velocidade_kmh">Digite a velocidade em km/h:</label><br>
        <input type="number" id="velocidade_kmh" name="velocidade_kmh"><br><br>

        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Processa a conversão de m/s para km/h
        if (!empty($_POST['velocidade_ms'])) {
            $velocidade_ms = $_POST['velocidade_ms'];
            $velocidade_kmh = $velocidade_ms * 3.6;
            echo "<p>A velocidade de " . $velocidade_ms . " m/s é igual a " . $velocidade_kmh . " km/h.</p>";
        }

        // Processa a conversão de km/h para m/s
        if (!empty($_POST['velocidade_kmh'])) {
            $velocidade_kmh = $_POST['velocidade_kmh'];
            $velocidade_ms = $velocidade_kmh / 3.6;
            echo "<p>A velocidade de " . $velocidade_kmh . " km/h é igual a " . $velocidade_ms . " m/s.</p>";
        }
    }
    ?>
</body>
</html>
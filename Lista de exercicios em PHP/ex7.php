<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <form method="post" action="">
        <label for="altura">Digite sua altura (em metros):</label><br>
        <input type="number" id="altura" name="altura"><br><br>
        
        <label for="peso">Digite seu peso (em quilogramas):</label><br>
        <input type="number" id="peso" name="peso"><br><br>
        
        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se os campos do formulário foram preenchidos
        if (!empty($_POST['altura']) && !empty($_POST['peso'])) {
            // Lê a altura e o peso do formulário
            $altura = $_POST['altura'];
            $peso = $_POST['peso'];

            // Verifica se os valores estão dentro de faixas razoáveis
            if ($altura > 0 && $peso > 0) {
                // Calcula o IMC
                $imc = $peso / ($altura * $altura);

                // Formata o resultado para exibir apenas duas casas decimais
                $imc_formatado = number_format($imc, 2);

                // Exibe o resultado para o usuário
                echo "<p>Seu IMC é: " . $imc_formatado . "</p>";
            } else {
                // Exibe uma mensagem de erro se os valores forem inválidos
                echo "<p>Por favor, insira valores válidos para altura e peso.</p>";
            }
        } else {
            // Se algum dos campos estiver vazio, exibe uma mensagem de erro
            echo "<p>Por favor, preencha ambos os campos.</p>";
        }
    }
    ?>
</body>
</html>
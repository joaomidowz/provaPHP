<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Desconto</title>
</head>
<body>
    <form method="post" action="">
        <label for="valor">Digite o valor:</label><br>
        <input type="number" id="valor" name="valor" step="any"><br><br>
        
        <input type="submit" value="Calcular Desconto">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o campo do formulário foi preenchido
        if (!empty($_POST['valor'])) {
            // Lê o valor do formulário
            $valor = $_POST['valor'];

            // Calcula o desconto de 27%
            $desconto = $valor * 0.27;

            // Calcula o valor com o desconto aplicado
            $valor_com_desconto = $valor - $desconto;

            // Exibe o valor com o desconto aplicado para o usuário
            echo "<p>O valor com desconto de 27% é: " . $valor_com_desconto . "</p>";
        } else {
            // Se o campo estiver vazio, exibe uma mensagem de erro
            echo "<p>Por favor, insira um valor.</p>";
        }
    }
    ?>
</body>
</html>
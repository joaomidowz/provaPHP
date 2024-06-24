<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Desconto</title>
</head>
<body>
    <form method="post" action="">
        <label for="valor">Digite o valor do produto:</label><br>
        <input type="number" id="valor" name="valor" step="any" required><br><br>
        
        <input type="submit" value="Calcular Desconto">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o campo do formulário foi preenchido
        if (!empty($_POST['valor'])) {
            // Lê o valor do produto do formulário
            $valorProduto = $_POST['valor'];

            // Calcula o desconto de 7%
            $desconto = $valorProduto * 0.07;

            // Calcula o valor com o desconto aplicado
            $valorComDesconto = $valorProduto - $desconto;

            // Exibe os resultados para o usuário
            echo "<p>Valor original do produto: R$ " . $valorProduto . "</p>";
            echo "<p>Valor do desconto (7%): R$ " . $desconto . "</p>";
            echo "<p>Valor com desconto: R$ " . $valorComDesconto . "</p>";
        } else {
            // Se o campo estiver vazio, exibe uma mensagem de erro
            echo "<p>Por favor, insira o valor do produto.</p>";
        }
    }
    ?>
</body>
</html>
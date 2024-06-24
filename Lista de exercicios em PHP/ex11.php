<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Parcelamento</title>
</head>
<body>
    <form method="post" action="">
        <label for="valor_produto">Digite o valor do produto:</label><br>
        <input type="number" id="valor_produto" name="valor_produto" step="any"><br><br>
        
        <input type="submit" value="Calcular Parcelamento">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o campo do formulário foi preenchido
        if (!empty($_POST['valor_produto'])) {
            // Lê o valor do produto do formulário
            $valorProduto = $_POST['valor_produto'];

            // Calcula o acréscimo de 16% ao valor do produto
            $acrescimo = $valorProduto * 0.16;
            $valorComAcrescimo = $valorProduto + $acrescimo;

            // Calcula o valor de cada parcela (dividindo por 10)
            $valorParcela = $valorComAcrescimo / 10;

            // Calcula o valor total da compra (10 parcelas)
            $totalCompra = $valorComAcrescimo;

            // Exibe os resultados para o usuário
            echo "<p>Valor de cada parcela (10x): R$ " . $valorParcela . "</p>";
            echo "<p>Valor total da compra: R$ " . $totalCompra . "</p>";
        } else {
            // Se o campo estiver vazio, exibe uma mensagem de erro
            echo "<p>Por favor, insira o valor do produto.</p>";
        }
    }
    ?>
</body>
</html>

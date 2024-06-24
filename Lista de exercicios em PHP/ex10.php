<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Volume de Caixa Retangular</title>
</head>
<body>
    <form method="post" action="">
        <label for="comprimento">Comprimento:</label><br>
        <input type="number" id="comprimento" name="comprimento" step="any" required><br><br>

        <label for="largura">Largura:</label><br>
        <input type="number" id="largura" name="largura" step="any" required><br><br>

        <label for="altura">Altura:</label><br>
        <input type="number" id="altura" name="altura" step="any" required><br><br>
        
        <input type="submit" value="Calcular Volume">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se os campos do formulário foram preenchidos
        if (!empty($_POST['comprimento']) && !empty($_POST['largura']) && !empty($_POST['altura'])) {
            // Lê o comprimento, largura e altura da caixa do formulário
            $comprimentoCaixa = $_POST['comprimento'];
            $larguraCaixa = $_POST['largura'];
            $alturaCaixa = $_POST['altura'];

            // Calcula o volume da caixa retangular
            $volumeCaixa = $comprimentoCaixa * $larguraCaixa * $alturaCaixa;

            // Exibe o volume da caixa para o usuário
            echo "<p>O volume da caixa retangular é: " . $volumeCaixa . "</p>";
        } else {
            // Se algum dos campos estiver vazio, exibe uma mensagem de erro
            echo "<p>Por favor, preencha todos os campos.</p>";
        }
    }
    ?>
</body>
</html>

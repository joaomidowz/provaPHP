<?php 
include 'connection.php';

try {
  $pdo = conectar();
  $stmt = $pdo->prepare("SELECT id FROM products");
  $stmt->execute();
  $process = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo 'Erro: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="index.js" defer></script>
    <link rel="stylesheet" href="style.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
        <form method="post">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" />
        
            <label for="surname">Descrição:</label>
            <input type="text" name="surname" id="surname" />
        
            <label for="category">Categoria:</label>
            <input type="text" name="category" id="category" />
        
            <label for="phone">Peso:</label>
            <input type="number" name="phone" id="phone" />
        
            <label for="value">Valor:</label>
            <input type="number" name="value" id="value" />
        
            <button type="submit" id="submit-btn" onclick="return validateForm()" name="submit-btn">Adicionar Produto</button>
        </form>
    </div>
  </body>
</html>


<?php 
include_once '../contato/connection.php';

if(isset($_POST['submit-btn'])) {
    $name = $_POST['name'];
    $description = $_POST['surname'];
    $category = $_POST['category'];
    $weight = $_POST['phone'];
    $value = $_POST['value'];

    try {
        $pdo = conectar();

        $stmt = $pdo->prepare("SELECT * FROM products WHERE name = :name");
        $stmt->bindValue(':name', $name);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            echo "<script>alert('Product already exists in the system!');</script>";
        } else {
            $stmt = $pdo->prepare("INSERT INTO products (name, description, category, weight, value) VALUES (:name, :description, :category, :weight, :value)");
            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':description', $description);
            $stmt->bindValue(':category', $category);
            $stmt->bindValue(':weight', $weight);
            $stmt->bindValue(':value', $value);
            $stmt->execute();

            header("Location: index.php?mensagem=Product added successfully!");
            exit();
        }
    } catch (PDOException $e) {
        die("Erro: " . $e->getMessage());
    }
}
?>

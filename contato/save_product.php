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

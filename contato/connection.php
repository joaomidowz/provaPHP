<?php 
function conectar() {
    $host = 'localhost';
    $port = '3307';
    $db = 'product'; // Replace with your database name
    $user = 'root'; // Replace with your database username
    $pass = ''; // Replace with your database password

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
    }
}


?>
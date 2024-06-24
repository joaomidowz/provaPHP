<?php
include 'conexao.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$phone = $_GET['phone'];
$addres = $_GET['addres'];
$sexo = $_GET['sexo'];

if (!$id) {
    $sql = "INSERT INTO crud (nomeUser, cpf, phone, addres, sexo) VALUES ('$nome', '$cpf', '$phone', '$addres', '$sexo')";
} else {
    $sql = "UPDATE crud SET nomeUser = '$nome', cpf = '$cpf', phone = '$phone', addres = '$addres', sexo = '$sexo' WHERE id = '$id'";
}

?>

<div class="row">
    <div class="col">
        <h1>Cadastro de Pessoa</h1>
        <a href="listar.php" class="btn btn-primary float-start">Listar Pessoas</a>
    </div>
    <?php 
        if(mysqli_query($conexao, $sql)) {
            if (!$id) {
                echo "<p>Novos dados cadastrados!</p>";
            } else {
                echo "<p>Os dados foram atualizados!</p>";
            }  
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao); 
        }
    ?>
</div>

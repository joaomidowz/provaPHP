<?php
include 'conexao.php';

if (isset($_POST['btn-save'])) { // Verifica se o botão 'btn-save' foi enviado via POST

    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $localidade = $_POST['localidade'];
    $uf = $_POST['uf'];
    $ibge = $_POST['ibge'];
    $ddd = $_POST['ddd'];

    // Instrução SQL para inserir os dados na tabela (substitua 'sua_tabela' pelo nome da sua tabela)
    $sql = "INSERT INTO cep (cep, logradouro, complemento, bairro, localidade, uf, ibge, ddd) 
            VALUES ('$cep', '$logradouro', '$complemento', '$bairro', '$localidade', '$uf', '$ibge', '$ddd')";

    if ($conexao->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conexao->error;
    }

    $conexao->close();
} else {
    echo "Nenhum dado foi enviado.";
}
?>

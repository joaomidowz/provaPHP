<?php 
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col"> <!-- Corrigido: adicionado a classe col-md-6 -->
        <h1>Cadastro CEP</h1>
        <hr>
        <form action="salvar.php" method="POST">
            <div>
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" onBlur="salvarCep()"> <!-- Corrigido: adicionado aspas duplas em class e id -->
            </div>
            <div>
                <label for="logradouro" class="form-label">Logradouro</label> <!-- Corrigido: corrigido o nome da classe -->
                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro">
            </div>
            <div>
                <label for="complemento" class="form-label">Complemento</label> <!-- Corrigido: corrigido o nome da classe -->
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
            </div>
            <div>
                <label for="bairro" class="form-label">Bairro</label> <!-- Corrigido: corrigido o nome da classe -->
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
            </div>
            <div>
                <label for="localidade" class="form-label">Localidade</label> <!-- Corrigido: corrigido o nome da classe -->
                <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Localidade">
            </div>
            <div>
                <label for="uf" class="form-label">UF</label> <!-- Corrigido: corrigido o nome da classe -->
                <input type="text" class="form-control" id="uf" name="uf" placeholder="UF">
            </div>
            <div>
                <label for="ibge" class="form-label">IBGE</label> <!-- Corrigido: corrigido o nome da classe -->
                <input type="text" class="form-control" id="ibge" name="ibge" placeholder="IBGE">
            </div>
            <div>
                <label for="ddd" class="form-label">DDD</label> <!-- Corrigido: corrigido o nome da classe -->
                <input type="text" class="form-control" id="ddd" name="ddd" placeholder="DDD">
            </div>
            <div>
            <button class="btn btn-primary mt-5" name="btn-save">Salvar</button>
            </div>
        </form>
    </div>
</div>
<script src="index.js"></script>
</body>
</html>

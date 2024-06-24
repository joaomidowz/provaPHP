<?php 
include 'header.php';
?>

<form action="salvar.php">
    <div class="mb-3">
        <label for="form-label" for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
    </div>
    <div class="mb-3">
        <label for="form-label" for="cpf">CPF:</label>
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF">
    </div>
    <div class="mb-3">
        <label for="form-label" for="phone">Telefone:</label>
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefone">
    </div>
    <div class="mb-3">
        <label for="form-label" for="addres">Endereço:</label>
        <input type="text" class="form-control" name="addres" id="addres" placeholder="Endereço">
    </div>

    <p>Informe o sexo:</p>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" id="m" value="m">
        <label for="form-label" class="form-check-label" for="m">Masculino</label>      
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" id="f" value="f">
        <label for="form-label" class="form-check-label" for="f">Feminino:</label>  
    </div>

    <input type="submit" name="enviarBtn" class="btn btn-primary float-end" value="enviar">

</form>

<?php 
include 'footer.php';
?>
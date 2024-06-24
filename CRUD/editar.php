<?php 
include 'header.php';
$id = $_GET['id'];
$sql = "select * from pessoa where id='id'";
$result = $conexao->query($sql);
$pessoa = $result->fetch_assoc();
?>

<div class="row">
    <div class="col">

    <form action="salvar.php">
        <input type="hidde" name="id" value="<?=$pessoa['id']?>">

            <div class="mb-3">
                <label class="form-label" for="name">Nome:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="nome" value="<?=$pessoa['nome']?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="cpf">CPF:</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" value="<?=$pessoa['cpf']?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="phone">Telefone:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefone" value="<?=$pessoa['phone']?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="addres">Endereço:</label>
                <input type="text" class="form-control" name="addres" id="addres" placeholder="Endereço" value="<?=$pessoa['addres']?>">
            </div>

            <div class="form-check">
            <input for="form-check-input" type="radio" class="form-control" name="sexo" id="m" value="m" <?= $pessoa['sexo'] =='m' ? 'checked' : ''?>>
            <label for="form-label" class="form-check-label" for="m">Masculino</label>      
        </div>
        <div class="form-check">
            <input for="form-check-input" type="radio" class="form-control" name="sexo" id="f" value="f" <?= $pessoa['sexo'] =='f' ? 'checked' : ''?>>
            <label for="form-label" class="form-check-label" for="f">Feminino</label>  
        </div>
    
    <input type="submit" class="btn btn-primary float-end" value="enviar">

    </form>

    </div>
</div>

<?php 
include 'footer.php';
?>
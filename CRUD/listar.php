<?php
include 'header.php';

$sql = 'SELECT * FROM crud';
$result = $conexao->query($sql);

?>

<div class="row">
    <div class="col">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Endereço</th>
            </tr>                
            </thead>
            <tbody>
                <?php 
                 while($row = $result->fetch_assoc()){ ?>
                <tr>
                    <td><?$row['id']?></td>
                    <td><?$row['name']?></td>
                    <td><?$row['cpf']?></td>
                    <td><?$row['phone']?></td>
                    <td><?$row['addres']?></td>
                    <td><?$row['sexo'] == 'm' ? 'Masculino' : 'Feminino"'?></td>
                    <td>
                        <a href="editar.php?id=<?=$row['id']?>" class="btn btn-primary">Editar</a>
                        <a href="excluir.php?id=<?=$row['id']?>" class="btn btn-primary">Excluir</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<?php 
include 'footer.php';
?>
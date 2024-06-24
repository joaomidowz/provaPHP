<?php
include 'header.php';

$sql = 'SELECT * FROM processos';
$result = $conexao ->query($sql);

?>

<div class="row">
   <div class="col">
       <table class="table">
        <thead>
            <tr>
                <th>Numeor processo</th>
                <th>nome interresado</th>
                <th>nome advogado</th>
                <th>nome tribunal</th>
                <th>decrição do processo</th>
            </tr>
        </thead>
        <tbody>
            <?php while(row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?=$row['numero_processo']?></td>
                    <td><?=$row['nome_interessado']?></td>
                    <td><?=$row['nome_advogado']?></td>
                    <td><?=$row['nome_tribunal']?></td>
                    <td><?=$row['descricao_processo']?></td>

            </tr>
            <?php

            } ?>
        </tbody>
       </table>



   </div>

</div>
<?php
include 'footer.php'
?>
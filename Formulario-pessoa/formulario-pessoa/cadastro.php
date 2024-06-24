<?php
 include 'header.php'
?>

<div class="row">
       <div class="col">
<h2>Cadastro de Processo Judicial</h2>
        <form method="POST" action="salvar.php" onsubmit="return validarFormularioProcesso()">
            <label class="from-label" for="numero_processo">Número do Processo:</label>
            <input class="form-control" type="text" id="numero_processo" name="numero_processo">
            
            <label class="from-label" for="nome_interessado">Nome do Interessado:</label>
            <input class="form-control" type="text" id="nome_interessado" name="nome_interessado">
            
            <label class="from-label" for="nome_advogado">Nome do Advogado:</label>
            <input class="form-control" type="text" id="nome_advogado" name="nome_advogado">
            
            <label class="from-label" for="nome_tribunal">Nome do Tribunal:</label>
            <input class="form-control" type="text" id="nome_tribunal" name="nome_tribunal">
            
            <label class="from-label" for="descricao_processo">Descrição do Processo:</label>
            <textarea id="descricao_processo" name="descricao_processo"></textarea>
            
            <input type="submit" class="btn btn-primary float-end" value="Cadastrar">
        </form>
    </div>
    </div>
    <script>
        function validarFormularioProcesso() {
            let numero_processo = document.getElementById('numero_processo').value;
            let nome_interessado = document.getElementById('nome_interessado').value;
            let nome_advogado = document.getElementById('nome_advogado').value;
            let nome_tribunal = document.getElementById('nome_tribunal').value;
            let descricao_processo = document.getElementById('descricao_processo').value;
            
            if (numero_processo === "" || nome_interessado === "" || nome_advogado === "" || nome_tribunal === "" || descricao_processo === "") {
                alert("Todos os campos devem ser preenchidos.");
                return false;
            }
            return true;
        }
    </script>
</body>



<?php
include 'footer.php'
?>

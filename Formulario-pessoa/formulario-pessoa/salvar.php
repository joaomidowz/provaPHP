<?php
include 'header.php'
?>




<?php
$id = isset($_POST['id']) ? $_POST['id'] : '';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_processo = $_POST['numero_processo'];
    $nome_interessado = $_POST['nome_interessado'];
    $nome_advogado = $_POST['nome_advogado'];
    $nome_tribunal = $_POST['nome_tribunal'];
    $descricao_processo = $_POST['descricao_processo'];
}








if(!$id){
    
    $sql = "insert into processos (numero_processo, nome_interessado, nome_advogado, nome_tribunal, descricao_processo) values('$numero_processo', '$nome_interessado', '$nome_advogado', '$nome_tribunal', '$descricao_processo')";
} else{
    $sql = "update produtos set numero_processo = '$numero_processo', nome_interessado ='$nome_interessado', nome_advogado ='$nome_advogado', nome_tribunal = '$nome_tribunal', descricao_processo = '$descricao_processo' where id = '$id'";
}

?>
<?php
include 'footer.php'
?>





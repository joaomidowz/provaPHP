<?php
    $host = 'localhost';  
    $db = 'viacep';  
    $user = 'root';  
    $password = '';  

    $conexao = mysqli_connect($host, $user, $password, $db, '3307');
    if(!$conexao) {
        echo 'Não conectado!';
    }
    return $conexao;

?>
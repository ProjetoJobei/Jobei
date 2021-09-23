<?php
    $host = "localhost";
    $usuario = "root";
    $banco = "3830548_jobei";     
    $senha = "";

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    if ($conexao -> connect_error) {
        echo "Erro de conexão";
    } 
?>

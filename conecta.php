<?php
    $host = "localhost";
    $usuario = "root";
    $banco = "jobei";     
    $senha = "";

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    if ($conexao -> connect_error) {
        echo "Erro de conexão";
    } else {
        /* Teste
        echo "Conectado"; */
    }
?>

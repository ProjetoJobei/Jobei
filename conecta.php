<?php
    $servidor = "localhost";
    $banco = ""; 
    $usuario = "root";
    $senha = "";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if ($conexao -> connect_error) {
        echo "Erro de conexão";
    } else {
        // Teste
        echo "Conectado";
    }
?>

<?php
    require('./../conecta.php'); 
    session_start();     

    $nome_prop = $_POST['tituloPropaganda']; 
    $descricao_prop = $_POST['descricaoPropaganda']; 
    $autor = mysqli_real_escape_string($conexao, $_SESSION['user_id']);

    echo "Recurso indisponível no momento <br><br>".$nome_prop."<br>".$descricao_prop."<br>".$autor;
?>
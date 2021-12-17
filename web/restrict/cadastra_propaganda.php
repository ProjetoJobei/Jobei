<?php
    require('./../conecta.php'); 
    session_start();     

    $nome = $_POST['tituloPropaganda']; 
    $descricao = $_POST['descricaoPropaganda']; 
    $autor = mysqli_real_escape_string($conexao, $_SESSION['user_id']);
    $região = filter_input_array($_POST['regiaoPropaganda']);
    $categoria = filter_input_array($_POST['categoriaPropaganda']);
    $midia = $_POST['midiaPropaganda'];

    $cadastra = "INSERT INTO `divulgacao` (`data_divulgacao`, `autor`) VALUES (NOW(), '$autor')";      
    $conexao -> query($cadastra); 
?>
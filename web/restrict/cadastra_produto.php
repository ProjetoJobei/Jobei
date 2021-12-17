<?php
    require('./../conecta.php'); 
    session_start();  
    
    $nome_prod = $_POST['nomeProduto']; 
    $descricao = $_POST['descricaoProduto']; 
    $especificacoes = $_POST['especificaProduto']; 
    $itens = $_POST['itemsInclusosProduto'];  
    $aviso = $_POST['avisoProduto'];
    $autor = mysqli_real_escape_string($conexao, $_SESSION['user_id']);
    $região = filter_input_array($_POST['regiaoProduto']);
    $categoria = filter_input_array($_POST['categoriaProduto']);
    $midia = $_POST['midiaProduto'];

    $cadastra = "INSERT INTO `produto` (`nome`, `descricao_produto`, `data_publicacao`, `midia_produto`, `autor`, `especificacoes`, `itens_inclusos`, `categoria`, `aviso`) 
                 VALUES ('$nome_prod', '$descricao', NOW(), '$midia', '$autor', '$especificacoes', '$itens', '$categoria', '$aviso')";
    $conexao -> query($cadastra); 
?>
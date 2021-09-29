<?php
    require('./../conecta.php'); 
    session_start();  
    
    $nome_prod = $_POST['nomeProduto']; 
    $descricao = $_POST['descricaoProduto']; 
    $autor = mysqli_real_escape_string($conexao, $_SESSION['user_id']);
    $especificacoes = $_POST['especificaProduto']; 
    $itens = $_POST['itemsInclusosProduto'];  
/*   
    $categoria = mysqli_real_escape_string($conexao, $_POST['categoriaProduto']); 
    $aviso = mysqli_real_escape_string($conexao, $_POST['avisoProduto']);
    $midia = $_POST['file'];

    $cadastra_produto = "INSERT INTO `produto` (`nome_produto`, `descricao_produto`, `data_publicacao`, `midia_produto`, `autor`, `especificacoes`, `itens_inclusos`, `categoria`, `aviso`) 
                         VALUES ('$nome_prod', '$descricao', NOW(), '$midia', '$autor', '$especificacoes', '$itens', '$categoria', '$aviso')";
*/
    $cadastra_produto = "INSERT INTO `produto` (`nome_produto`, `descricao_produto`, `data_publicacao`, `autor`, `especificacoes`, `itens_inclusos`) 
                         VALUES ('$nome_prod', '$descricao', NOW(), '$autor', '$especificacoes', '$itens')";
    $conexao -> query($cadastra_produto); 
?>
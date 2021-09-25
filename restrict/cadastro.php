<?php  
    session_start();     
    require('./../conecta.php');    

    // Informações obrigatórias
    $nome = mysqli_real_escape_string($conexao, $_POST['nome_user']); 
    $email = mysqli_real_escape_string($conexao, $_POST['email_user']); 
    $senha = mysqli_real_escape_string($conexao, md5($_POST['senha_user']));
    $nivel = mysqli_real_escape_string($conexao, 1); 
    $nome_completo = mysqli_real_escape_string($conexao, $_POST['nome_completo_user']);     
    $genero = mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'genero_user')); 
    $cidade = mysqli_real_escape_string($conexao, $_POST['cidade_user']);
    $estado = mysqli_real_escape_string($conexao, $_POST['estado_user']);
    
    // Métodos de pagamento (OPCIONAL)
    $pagamento = mysqli_real_escape_string($conexao, $_POST['tipo_de_pagamento']);
    $cartao = mysqli_real_escape_string($conexao, $_POST['numero_cartao_user']);
    $cvc = mysqli_real_escape_string($conexao, $_POST['cvc_user']);
    $mes_expira = mysqli_real_escape_string($conexao, $_POST['mes_expira_cartao']);
    $ano_expira = mysqli_real_escape_string($conexao, $_POST['ano_expira_cartao']);

    $cad = "INSERT INTO `usuario` (`nome`, `email`, `senha`, `nivel`, `nome_completo`, `genero`, `data_cadastro`) VALUES ('$nome', '$email', '$senha', '$nivel', '$nome_completo', '$genero', NOW())"; 
    $cadas = "INSERT INTO `pagamento` (`tipo_pagamento`, `numero_cartao`, `cvc`, `mes_expira`, `ano_expira`) VALUES ('$pagamento', '$cartao', '$cvc', '$mes_expira', '$ano_expira')";
    $cadastra = "INSERT INTO `regiao` (`cidade`, `estado`) VALUES ('$cidade', '$estado')";      
    $conexao -> query($cad); 
    $conexao -> query($cadas); 
    $conexao -> query($cadastra); 
    
    echo "Olá ".$nome."!<br>".$email."<br>"; echo $senha."<br>"; echo $nivel."<br>";
    
    $consulta = "SELECT COUNT(*) AS total FROM usuario WHERE email = '{$email}' AND senha = md5('{$senha}') AND nivel = '{$nivel}'";
    $resultado = mysqli_query($conexao, $consulta);
    $registro = mysqli_fetch_assoc($resultado);   

    if ($registro['total'] == 0) {  
        $_SESSION['user-inexistent'] = true;
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['nivel'] = $nivel;         
    }
    //echo "Olá ".$_SESSION['nome']."!<br>".$_SESSION['email']."<br>"; echo $_SESSION['senha']."<br>"; echo $_SESSION['nivel']."<br>";

    header('Location: ./restrita.php');
?>
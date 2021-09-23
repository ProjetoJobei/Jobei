<?php    
    require('./../conecta.php'); 
    session_start();   

    // Informações básicas
    $nome = $_POST['nome_user'];
    $email = $_POST['email_user'];
    $senha = md5($_POST['senha_user']);
    $nivel = 1; // por padrão
    // Informações pessoais
    $nome_completo = $_POST['nome_completo_user'];
    $genero = filter_input(INPUT_POST, 'genero_user');
    $cidade = $_POST['cidade_user'];
    $estado = $_POST['estado_user'];
    // Métodos de pagamento
    $pagamento = $_POST['tipo_de_pagamento'];
    $cartao = $_POST['numero_cartao_user'];
    $cvc = $_POST['cvc_user'];
    $mes_expira = $_POST['mes_expira_cartao'];
    $ano_expira = $_POST['ano_expira_cartao'];

    $consulta = "INSERT INTO `usuario` (nome, email, senha, nivel, nome_completo, genero) VALUES ('$nome', '$email', '$senha', '$nivel', '$nome_completo', '$genero')";
    $consulta = "INSERT INTO `pagamento` (tipo_pagamento, numero_cartao, cvc, mes_expira, ano_expira) VALUES ('$pagamento', '$cartao', '$cvc', '$mes_expira', '$ano_expira')";
    $consulta = "INSERT INTO `regiao` (cidade, estado) VALUES ('$cidade', '$estado')";
    $conexao -> query($consulta);

    header('Location: ./restrita.php');
?>
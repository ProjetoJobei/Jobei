<?php    
    include './../conecta.php';
    session_start();

    // Informações básicas
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $nivel = 1; // por padrão
    // Informações pessoais
    $nome_completo = $_POST['nome_completo'];
    $genero = $_POST['genero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    // Métodos de pagamento
    $pagamento = $_POST['tipo_pagamento'];
    $cartao = $_POST['numero_cartao'];
    $cvc = $_POST['cvc'];
    $mes_expira = $_POST['mes_expira'];
    $ano_expira = $_POST['ano_expira'];
    // Termos de serviço e políticas de privacidade
    $termos = $_POST['termos'];

    $consulta = "INSERT INTO usuario (nome, nome_completo, email, senha, genero, cidade, estado, nivel) VALUES ('$nome', '$nome_completo', '$email', '$senha', '$genero', '$cidade', '$estado','$nivel')";
    $consulta = "INSERT INTO pagamento (tipo_pagamento, numero_cartao, cvc, mes_expira, ano_expira) VALUES ('$pagamento', '$cartao', '$cvc', '$mes_expira', '$ano_expira')";
    $conexao -> query($consulta);

    header('Location: ./../login.html');
?>
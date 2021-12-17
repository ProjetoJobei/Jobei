<?php
    require('./../conecta.php'); 
    session_start();

    $consulta = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = md5('{$senha}') AND nivel = '{$nivel}'";    
    $resultado = mysqli_query($conexao, $consulta);
    $registro = mysqli_num_rows($resultado);

    $consultaDados = "SELECT regiao.cidade, regiao.estado FROM regiao INNER JOIN usuario WHERE regiao.cod_regiao = {$consulta['regiao']}";
    $resultadoDados = mysqli_query($conexao, $consultaDados);

    if ($registro == 1) { 
        $user = mysqli_fetch_assoc($resultadoDados);      
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['nome_completo'] = $user['nome_completo'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['nivel'] = $user['nivel'];     
        $_SESSION['cidade'] = $user['cidade'];
        $_SESSION['estado'] = $user['estado'];  
        $_SESSION['biografia'] = $user['biografia'];       
        $_SESSION['genero'] = $user['genero'];  
        $_SESSION['telefone'] = $user['telefone'];           
            
        header('Location: ./restrita.php');
    } else {
        // Vai conectar porém sem ter cadastro
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['senha'] = $_POST['senha'];
        $_SESSION['nivel'] = 1;  

        header('Location: ./../login.html');  
    }

    header('Location: ./restrita.php');
?>
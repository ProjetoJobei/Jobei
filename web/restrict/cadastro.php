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
    $bio = mysqli_real_escape_string($conexao, $_POST['biografia_user']);
    $data_nascimento = mysqli_real_escape_string($conexao, $_POST['nascimento_user']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['telefone_user']);


    $cadastrauser = "INSERT INTO `usuario` (`nome`, `email`, `senha`, `nivel`, `nome_completo`, `genero`, `data_cadastro`, `biografia`, `data_de_nascimento`, `telefone`) VALUES ('$nome', '$email', '$senha', '$nivel', '$nome_completo', '$genero', NOW(), '$bio', '$data_nascimento', '$telefone')";
    $conexao -> query($cadastrauser); 
    $cadastraregiao = "INSERT INTO `regiao` (`cidade`, `estado`) VALUES ('$cidade', '$estado')";    
    $conexao -> query($cadastraregiao); 
    
    echo "Olá ".$nome."!<br>".$email."<br>"; echo $senha."<br>"; echo $nivel."<br>";
    
    $consulta = "SELECT COUNT(*) AS total FROM usuario WHERE email = '{$email}' AND senha = md5('{$senha}') AND nivel = '{$nivel}'";
    $resultado = mysqli_query($conexao, $consulta);
    $registro = mysqli_fetch_assoc($resultado);   

    if ($registro['total'] == 0) {  
        $_SESSION['user-inexistent'] = true;
        $_SESSION['nome'] = $nome;
        $_SESSION['nome_completo'] = $nome_completo;
        $_SESSION['email'] = $email;
        $_SESSION['nivel'] = $nivel;    
        $_SESSION['cidade'] = $cidade;
        $_SESSION['estado'] = $estado;  
        $_SESSION['biografia'] = $bio; 
        $_SESSION['telefone'] = $usuario['telefone'];         
    }
    //echo "Olá ".$_SESSION['nome']."!<br>".$_SESSION['email']."<br>"; echo $_SESSION['senha']."<br>"; echo $_SESSION['nivel']."<br>";

    header('Location: ./restrita.php');
?>
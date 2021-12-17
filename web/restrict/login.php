<?php  
    session_start();
    require('./../conecta.php'); 

    $email = mysqli_real_escape_string($conexao, $_POST['email']); 
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $nivel = mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'nivel')); 

    $consulta = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = md5('{$senha}') AND nivel = '{$nivel}'";    
    $resultado = mysqli_query($conexao, $consulta);
    $registro = mysqli_num_rows($resultado);    
    
    $consultregiao = "SELECT regiao.cidade, regiao.estado FROM regiao INNER JOIN usuario WHERE regiao.cod_regiao = {$consulta['regiao']}";
    $resultregiao = mysqli_query($conexao, $consultregiao);

    if ($registro == 1) {
        $usuario = mysqli_fetch_assoc($resultado);  
        $regiao = mysqli_fetch_assoc($resultregiao);      
        $_SESSION['user_id'] = $usuario['user_id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['nome_completo'] = $usuario['nome_completo'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['nivel'] = $usuario['nivel'];     
        $_SESSION['cidade'] = $regiao['cidade'];
        $_SESSION['estado'] = $regiao['estado'];  
        $_SESSION['biografia'] = $usuario['biografia'];       
        $_SESSION['genero'] = $usuario['genero'];  
        $_SESSION['telefone'] = $usuario['telefone'];           
            
        header('Location: ./restrita.php');
        //echo "Olá ".$_SESSION['nome']."!<br>".$_SESSION['email']."<br>"; echo $_SESSION['senha']."<br>"; echo $_SESSION['nivel']."<br>";
    } else {
        $_SESSION['user-inexistent'] = true;
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['senha'] = $_POST['senha'];
        $_SESSION['nivel'] = $nivel;  

        header('Location: ./../login.html');  
        exit();
        // echo "ERRO<br>".$_SESSION['email']."<br>"; echo $_SESSION['senha']."<br>"; echo $_SESSION['nivel']."<br>";
    }
?>
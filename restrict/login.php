<?php  
    session_start();
    require('./../conecta.php'); 

    $email = mysqli_real_escape_string($conexao, $_POST['email']); 
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $nivel = mysqli_real_escape_string($conexao, filter_input(INPUT_POST, 'nivel')); 

    $consulta = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = md5('{$senha}') AND nivel = '{$nivel}'";
    $resultado = mysqli_query($conexao, $consulta);
    $registro = mysqli_num_rows($resultado);        

    if ($registro == 1) {
        $usuario = mysqli_fetch_assoc($resultado);        
        $_SESSION['user_id'] = $usuario['user_id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $email;
        $_SESSION['nivel'] = $nivel;               
            
        header('Location: ./restrita.php');
        //echo "Olá ".$_SESSION['nome']."!<br>".$_SESSION['email']."<br>"; echo $_SESSION['senha']."<br>"; echo $_SESSION['nivel']."<br>";
    } else {
        $_SESSION['user-inexistent'] = true;
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['senha'] = $_POST['senha'];
        $_SESSION['nivel'] = $nivel;  

        header('Location: ./../login.php');  
        exit();
        // echo "ERRO<br>".$_SESSION['email']."<br>"; echo $_SESSION['senha']."<br>"; echo $_SESSION['nivel']."<br>";
    }
?>
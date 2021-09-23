<?php  
    require('./../conecta.php'); 
    if (!isset($_SESSION)) { session_start(); }

    $email = !empty($_POST['email']) ? $_POST['email'] : '';
    $senha = md5(!empty($_POST['senha']) ? $_POST['senha'] : '');
    $nivel = filter_input(INPUT_POST, 'nivel'); 

    if ($email && $senha) {

        $consulta = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $resultado = $conexao -> query($consulta);
        $registros = $resultado -> num_rows;
        $resultado_usuario = mysqli_fetch_assoc($resultado);

        if ($registros != 0) {
                         
            $_SESSION['user_id'] = $registro_usuario['user_id'];
            $_SESSION['nome'] = $registro_usuario['nome'];
            $_SESSION['email'] = $registro_usuario['email'];
            $_SESSION['senha'] = $registro_usuario['senha'];
            $_SESSION['nivel'] = $registro_usuario['nivel'];           

            /*if ($nivel == 1) { echo "Usuário comum <br>"; echo $email."<br>";echo $senha."<br>";echo $nivel."<br>";
            } else { echo "Administrador <br>"; echo $email."<br>";echo $senha."<br>";echo $nivel."<br>"; } */
            
            header('Location: ./restrita.php');
        } else {
            header('Location: ./restrita.php');
            //header('Location: ./../login.html');  
            // echo $email."<br>"; echo $senha."<br>"; echo $nivel."<br>";
        }
    } else {
        header('Location: ./../index.html');
    }
?>
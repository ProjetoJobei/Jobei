<?php    
    include './../conecta.php';
    session_start();

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $consulta = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    
    $resultado = $conexao -> query($consulta);
    $registros = $resultado -> num_rows;
    $registro_usuario = mysqli_fetch_assoc($resultado);

    if ($registros == 1) {
        $_SESSION['user_id'] = $registro_usuario['user_id'];
        $_SESSION['nome'] = $registro_usuario['nome'];
        $_SESSION['email'] = $registro_usuario['email'];
        $_SESSION['senha'] = $registro_usuario['senha'];
        $_SESSION['nivel'] = $registro_usuario['nivel']; 

        header('Location: ./restrita.php');
    } else {
        header('Location: ./../login.html');
    }
?>
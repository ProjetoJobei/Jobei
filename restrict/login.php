<?php
    include '../conecta.php';

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $consulta = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $resultado = $conexao -> query($consulta);
    $registros = $resultado -> num_rows;
    $registro_usuario = mysqli_fetch_assoc($resultado);

    if ($registros == 1) {
        $_SESSION['id'] = $registro_usuario['ID'];
        $_SESSION['nome'] = $registro_usuario['nome'];
        $_SESSION['email'] = $registro_usuario['email'];
        $_SESSION['nivel'] = $registro_usuario['nivel'];

        session_start();
        header('Location: restrita.php');
    } else {
        header('Location: ../login.php');
    }
?>

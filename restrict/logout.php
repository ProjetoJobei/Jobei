<?php 
    session_start();

    unset(
        $_SESSION['id'],
		$_SESSION['nome'],
		$_SESSION['email'],
		$_SESSION['senha'],
        $_SESSION['nivel']
    );

    header('Location: ./../login.html');
?>

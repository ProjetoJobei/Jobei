<?php 
    include '../conecta.php';
    session_start();

    unset(
        $_SESSION['']
    );

    header('Location: ./login.php');
?>

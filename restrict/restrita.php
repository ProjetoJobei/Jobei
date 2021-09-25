<?php
	session_start();
	require('./../conecta.php'); 	

	//echo "EUREKA<br>".$_SESSION['user_id']."<br>".$_SESSION['email']."<br>".$_SESSION['nome']."<br>".$_SESSION['nivel'];
	header('Location: ./dashboard.php'); 
?>

<?php
	include './../conecta.php';
	session_start();

	if ((!isset($_SESSION['user_id']) == true) && (!isset($_SESSION['email'])== true) && 
	(!isset($_SESSION['senha'])== true) && (!isset($_SESSION['nivel'])== true)) { 
		header('Location: ./dashboard.php'); 
	} else { 
		header('Location: ./../login.html'); 
	}
?>

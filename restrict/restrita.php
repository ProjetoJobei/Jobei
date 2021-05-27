<?php
	session_start();

	if ((!isset($_SESSION['id'])== true) && (!isset($_SESSION['nome'])== true) && (!isset($_SESSION['email'])== true) && (!isset($_SESSION['nivel'])== true)) {

		header('Location: ./dashboard.php');
	}
?>

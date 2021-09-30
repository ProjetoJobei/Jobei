<?php
	session_start();
	require('./../conecta.php'); 	

	if ($_SESSION['nivel'] == 1) {
		header('Location: ./dashboard.php'); 
	} else if ($_SESSION['nivel'] == 2) {
		header('Location: ./index.php'); 
	} 	
?>

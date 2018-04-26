<?php 
	
	session_start();

	if(isset($_SESSION['logado'])){

		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		unset($_SESSION['logado']);

		header("Location: index.php");
		die();
	}
	else{
		header("Location: index.php");
	}
?>
<?php 
	include 'BD/conexao.php';
	include 'BD/bancoUsuario.php';

	$codigo = (int) $_POST['codigo'];
	
	validaUsuario($con,$codigo);

	
	header('location:logar.php');

?>

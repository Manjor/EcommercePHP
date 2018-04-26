<?php 
	
	include 'BD/conexao.php';
	include 'BD/bancoUsuario.php';


	/*Captura de Dados Pessoais*/
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$nascimento = $_POST['nascimento'];
	$sexo = (int) $_POST['sexo'];
	$telefone = $_POST['telefone'];
	$celular =  $_POST['celular'];


	/*Fim dos dados Pessoais*/
	
	/*Captura dos dados de Endereço*/
	$logradouro = $_POST['logradouro'];
	$bairro = $_POST['bairro'];
	$complemento = $_POST['complemento'];
	$cep = (int) $_POST['cep'];
	$cidade = $_POST['cidade'];
	$estado =(int) $_POST['estado'];

	/*Fim dos dados de Endereço*/

	/*Captura de Dados de Segurança*/
	$senha = $_POST['senha'];
	$senhaConfirmada = $_POST['senhaConfirmada'];

	/*var_dump(
		$nome,$cpf,$email,$nascimento,$sexo,$telefone,$celular,
		$logradouro,$bairro,$complemento,$cep,$cidade,$estado,$senha

	);*/

	$codigo = rand(12933,199568);


	addUsuario($con,$nome,$cpf,$email,$nascimento,$sexo,$senha,$codigo,$logradouro,$bairro,$complemento,$cep,$cidade,$estado,$telefone,$celular);

		?> <script> alert("Cadastro Realizado! Você irá para a pagina de confirmação");</script> <?php 
		header('location:confirmarCadastro.php');
	
?>
<?php
include 'conexao.php';

/*Função que consulta todos os usuarios*/
function consultaUsuarios($con)
{

	$usuarios = array();
	$resultado = mysqli_query($con,"SELECT * FROM usuario");

	while ($usuario = mysqli_fetch_assoc($resultado))
	{
		array_push($usuarios,$usuario);
	}
	return $usuarios;
}

/*FUNÇÃO QUE IRA RETORNAR OS DADOS DE UMA CONSULTA DE USUARIO POR EMAIL*/
function consultaPorEmail($con,$email)
{

	$usuarios = array();
	$resultado = mysqli_query($con,"CALL verUsuario('{$email}')");
	while ($usuario = mysqli_fetch_assoc($resultado))
	{
		array_push($usuarios,$usuario);
	}
	return $usuarios;
}


/*Função que irá cadastrar um novo usuario no sistema
* Recebe 16 parametros
* Chama uma procedure dentro da base de dados.
*/
function addUsuario($con,$nome,$cpf,$email,$nascimento,$sexo,$senha,$codigo,$logradouro,$bairro,$complemento,$cep,$cidade,$estado,$telefone,$celular)
{

	$query = "CALL addUsuario('{$nome}','{$cpf}','{$email}','{$nascimento}',{$sexo},'{$senha}',{$codigo},'{$logradouro}','{$bairro}','{$complemento}','{$cep}','{$cidade}',{$estado},'{$telefone}','{$celular}')";

	return mysqli_query($con,$query);

}

/*Função que irá validar o cadastro do usuario, apos os mesmo inserir o codigo de segurança que lhe foi enviado por email.*/
function validaUsuario($con,$codigo){

	$query = "UPDATE usuario SET status=1 WHERE codigo={$codigo}";

	return  mysqli_query($con,$query);

}

function verificaLogin($con,$email,$senha){

	$resultado = mysqli_query($con,"SELECT * FROM usuario WHERE email='$email' AND senha='$senha' AND status='1';");

	if(mysqli_num_rows($resultado) > 0){

			session_start();
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['logado'] = "logado";
            header('location:/Manjor/index.php');
	}
	else{
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            unset($_SESSION['logado']);

            header('location:/Manjor/logar.php');
        }

}

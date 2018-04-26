<?php include 'conexao.php';
include 'bancoUsuario.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$validacao = verificaLogin($con,$email,$senha);

?>
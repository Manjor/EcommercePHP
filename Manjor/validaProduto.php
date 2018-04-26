<?php

include 'BD/conexao.php';
include 'BD/bancoProduto.php';



$nomeproduto = $_POST['nomeproduto'];
$descricao = $_POST['descricao'];
$modelo = $_POST['modelo'];
$quantidade = (int) $_POST['quantidade'];
$valor = (float) $_POST['valor'];
$idcategoria = (int)  $_POST['categoria'];
$idmarca = (int)  $_POST['marca'];


if(isset($_FILES['arquivo'])){
  $extencao = strtolower(substr($_FILES['arquivo']['name'], -4));
  
  $novonome = md5(time()).$extencao;

  $diretorio = "imgprodutos/";

  move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio,$novonome);

}


addProduto($con,$nomeproduto,$descricao,$modelo,$quantidade,$valor
,$novonome,$idcategoria,$idmarca);

header('location: index.php');

?>

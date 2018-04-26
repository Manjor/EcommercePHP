<?php
include 'conexao.php';






/*Função que consulta os produtos da base de dados*/
function consultaProdutos($con){}
/*Função que adiciona um novo Produto a base de dados*/
function addProduto($con,$nomeproduto,$descricao,$modelo,$quantidade,$valor
,$endereco,$idcategoria,$idmarca){
  $query = "CALL addProduto('{$nomeproduto}','{$descricao}','{$modelo}',{$quantidade}
  ,{$valor},'{$endereco}',{$idcategoria},{$idmarca})";

  return mysqli_query($con,$query);
}
/*Função que altera um produto na base de dados*/
function alteraProduto($con,$id){}
/*Função que remove um produto da base de dados*/
function removeProduto($con,$id){}

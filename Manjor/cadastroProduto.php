<?php
  include 'cabecalho.php';
  include 'barranavegacao.php';
 ?>


<div class="container">
  <div class="row">
    <div class="col-md-10 mx-auto">
      <h2>Cadastro de Produto</h2>
    </div>
    <form class="col-md-10 mx-auto" action="validaProduto.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="form-group col-md-5">
          <label for="inNomeProduto">Nome do Produto</label>
          <input type="text" name="nomeproduto" class="form-control">
        </div>
        <div class="form-group col-md-7">
          <label for="inDescricao">Descrição</label>
          <input type="text" name="descricao" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label for="inModelo">Modelo</label>
          <input type="text" name="modelo" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label for="inQuantidade">Quantidade</label>
          <input type="text" name="quantidade" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label for="inValor">Valor</label>
          <input type="text" name="valor" class="form-control">
        </div>
        <div class="form-group col-md-12">
          <label for="inArquivo">Imagem do Produto</label>
          <input type="file" name="arquivo" class="form-control">
        </div>
        <div class="form-group col-md-6">
          <label for="inMarca">Marca</label>
          <select class="form-control" name="marca">
            <option value="1">ASUS</option>
            <option value="2">INTEL</option>
            <option value="3">AMD</option>
            <option value="4">GIGABYTE</option>
            <option value="5">MSI</option>
            <option value="5">SEAGATE</option>
            <option value="5">KINGSTON</option>
            <option value="5">CORSAIR</option>
            <option value="5">EVGA</option>
            <option value="5">ASROK</option>

          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="inCategoria">Categoria</label>
          <select class="form-control" name="categoria">
            <option value="1">PLACA MAE</option>
            <option value="2">PROCESSADOR</option>
            <option value="3">MEMORIA</option>
            <option value="4">HD</option>
            <option value="5">PLACA DE VIDEO</option>

          </select>
        </div>
        <div class="form-group mx-auto my-4 col-md-3">
          <button type="submit" class="btn btn-default btn-block">Cadastrar</button>
        </div>
      </div>
    </form>
  </div>
</div>

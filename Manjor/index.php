<?php include("cabecalho.php") ?>
<?php include 'barranavegacao.php'; ?>

<style>
	/*Estilos*/
	.nav a {
		color: black;
		border-bottom: 0.3pc solid;
	}
	.nav a:hover{color: #f2615c; transition: 0.5s}
</style>
<!--Desenvolvimento da Pagina Inicial, Esta que irá presentar os chamados em abertos e os chamados que estão sendo processados pelo usuário-->

<!--DIVISÃO PRINCIPAL-->
<div class="container-fluid">


	<div class="row bg-dark py-3 text-white">
		<div class="col-md-12 pt-3 text-center">
			<h1>Manjor Hardware</h1>
			<p>Os Melhores Produtos você encontra aqui</p>
			<p>Ganhe R$ 20,00 de Desconto, basta assinar nossa Newslatter inserindo seu email abaixo</p>
		</div>
		<div class="col-12 mx-auto">
			<form class="form form-inline center" action="news">
				<div class="form-group mx-auto">
					<input class="form-control" type="search" placeholder="Seu Email">
					<button class="btn btn-outline-light mx-auto">Assinar</button>
				</div>
				
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10 offset-md-1 bg-light rounded mt-2 py-2">
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<a href="#" class="nav-link">Placa-Mãe</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Processadores</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Memorias</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">HD's</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Placas de Video</a>
				</li>
			</ul>
		</div>
	</div>
</div>

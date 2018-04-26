<?php include 'cabecalho.php';
 include 'barranavegacao.php'; ?>


 <!--Div Geral de Confimação de Cadastro-->
<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4 bg-dark my-5 p-3">
			<h2 class="text-center bg-danger p-2 rounded">Confirmar Cadastro</h2>
			<h4 class="text-center text-primary">Foi Enviado um codigo de segurança no seu email!.</h4>
			<form class="form" action="validarCadastro.php" method="post">
				<div class="form-group">
					<label for="inCodigo">Digite aqui o Codigo:</label>
					<input class="form-control" type="text" name="codigo" id="inCodigo" required="">
					<button type="submit" class="btn btn-outline-danger btn-block my-2">Confirmar</button>
				</div>
			</form>
		</div>
	</div>
</div>
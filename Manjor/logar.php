<?php include 'barranavegacao.php';
include 'cabecalho.php'; ?>

<style>
	h2{color:#f2615c}
	label {color: #f2615c}
	p {color: black}
	.btn{border: 0.2pc solid #f2615c; background: white; color: #f2615c; font-weight: bold;}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8 col-md-5 col-xl-3 col-lg-4 mx-auto  my-5 bg-light py-3 border rounded">
			<h2 class="text-center w-100">Login Manjor</h2>
			<form class="form-group" action="BD/ope.php" method="post">
				<label>Email</label>
				<input class="form-control" type="text" name="email" placeholder="email@email.com" required="">
				<label>Senha</label>
				<input class="form-control" type="password" name="senha" placeholder="Senha" required="">
				<p class="mt-2">Esqueceu Sua Senha?<a href="minhaconta.php">Clique Aqui</a></p>
				<div>
					<button class="btn btn-block" type="submit">Acessar</button>
					<p align="center" class="mt-4">Ainda não possui uma conta?<a href="cadastroUsuario.php">Cadastrar-Se</a></p>
				</div>
			</form>
		</div>
	</div>
</div>

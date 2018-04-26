<?php include 'barranavegacao.php';
include 'cabecalho.php';
include 'BD/conexao.php';
include 'BD/bancoUsuario.php';


$email = $_SESSION['email'];

$usuarios = consultaPorEmail($con,$email);
?>

<style>
	a{color:#f2615c }
	h5{color: #f2615c}
	p{color: gray}
	h4{color: #f2615c}
	#modalPessoais {color: black}
</style>



<div class="container my-2">
	<div class="row">

		<!--Div do menu de opções de conta-->
		<div class="col-md-12 bg-light">
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<a href="#" class="nav-link"><img src="img/placamae.png" width="25"> Minha Conta</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link"><img src="img/processador.png" width="25">Alterar Dados</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link"><img src="img/pedidos.png" width="25">Meus Pedidos</a>
				</li>
			</ul>
		</div>
		<!--Fim do menu de opções de conta-->

		<!--Div de layout de dados-->
		<div class="col-md-12 rounded mx-auto my-2">
			<div class="container-fluid bg-light">
				<div class="row">


					<div id="`dadosPessoais" class="col-md-8 my-2 py-2 mx-auto bg-dark rounded">
						<h4>Dados Pessoais</h4>
					</div>
					<div class="col-md-8 mx-auto p-2 rounded">
					<!--Inicia um for each que irá pegar os dados buscados do banco de dados -->
					<?php foreach ($usuarios as $usuario) { ?>
						<form class="form">

							<div class="form-group col-md-10">
								<h5>Nome:</h5>
								<input type="text" placeholder="<?= $usuario['nome'] ?>" class="form-control">
							</div>
							<div class="form-group col-md-10">
								<h5>CPF:</h5>
								<p><?= $usuario['cpf'] ?></p>
							</div>
							<div class="form-group col-md-10">
								<h5>Email:</h5>
								<input type="text" placeholder="<?= $usuario['email'] ?>" class="form-control">
							</div>
							<div class=" form-group col-md-6">
								<h5>Data de Nascimento</h5>
								<input type="date" placeholder="<?= $usuario['nascimento'] ?>" class="form-control">
							</div>
							<!--Botão de Alteração que ativa o Modal do Formulário-->
							<button class="btn btn-outline-danger float-right">Alterar</button>
						</form>
					</div>

					<div class="col-md-8 my-2 py-2 mx-auto bg-dark rounded">
						<h4>Dados de Entrega</h4>
					</div>
					<div class="col-8 mx-auto bg-light p-2 rounded">
						<form>
						<div class="form-group col-md-10">
						<h5>Logradouro</h5>
						<input type="text" placeholder="<?= $usuario['logradouro'] ?>" class="form-control">
						</div>
						<div class="col-md-10">
						<h5>Bairro</h5>
						<input type="text" placeholder="<?= $usuario['bairro'] ?>" class="form-control">
						</div>
						<div class="form-group col-md-6">
						<h5>Cep</h5>
						<input type="text" placeholder="<?= $usuario['cep'] ?>" class="form-control">
						</div>
						<div class="form-inline col-md-10">
						<h5>Cidade-Estado</h5>
						<p><input type="text" placeholder="<?= $usuario['nomecidade'] ?>" class="form-control">-
						<input type="text" placeholder="<?= $usuario['uf'] ?>" class="form-control"></p>
						</div>
						<!--Botão de Alteração que ativa o Modal do Formulário-->
						<button class="btn btn-outline-danger float-right">Alterar</button>
						</form>
						<?php } ?>
						<!--Finaliza o for each-->
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

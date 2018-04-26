
<style>

	nav{background-color: black;}
	nav a, #minha{color: white; border-bottom: 0.2pc solid black; padding-right: 1%}
	.nav-link:hover{
		color: #f2615c;
		border-color: inherit;
		transition: 1s;
	}
</style>


<!--Barra de Navegação-->
<nav class="navbar navbar-expand-lg">
	<!--Logo ou Nome da empresa-->
	<a class="navbar-brand" href="index.php" style="color: #f2615c;"><h3>Manjor</h3></a>
	<!---->
	<!--Botao Collapso-->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#divCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><img src="img/menu.png"></span>
    <!--Fim do botão collapso-->
  </button>
  <!--Div que contem os itens do menu-->
	<div class="collapse navbar-collapse" id="divCollapse">
		<!--Lista de Menus da barra-->
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Inicio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php">Departamentos</a>
			</li>
		</ul>
		<!--Fim da lista de menus da barra-->
		<ul class="navbar-nav">
			<li class="nav-item">
				<?php
					session_start();
					/*Se existir uma sessão ativa o menu fica em minha conta*/

					if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])){
						?>
							<a class="nav-link" href="logar.php">
								Fazer Login
							</a>
						<?php }
						else
						{
						?>
							<form class="form-inline" action="sair.php">
								<a  href="minhaconta.php" class="mr-3 nav-link">Minha Conta</a>
								<button type="submit" class="mx-3 btn btn-outline-danger">Sair</button>
							</form>

						<?php
						}
				?>
			</li>
		</ul>
	</div>
	<!--Fim da div de menus da barra-->
</nav>
<!--Fim da barra de navegação-->

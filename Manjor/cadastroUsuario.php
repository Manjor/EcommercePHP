<?php include 'cabecalho.php' ;
	include 'barranavegacao.php' ?>

<style>
	.container{color: gray}
	h2{color:#f2615c; font-weight: bold;}
	h4 {background-color: #f2615c; color: white}
	label {color: #f2615c; font-weight: bold;}
	.btn {background-color:#f2615c;color: white}

</style>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-xl-8 mx-auto bg-light my-5 py-3">

			<h2 class="text-center">Manjor</h2>
			<p class="text-center">"Ficamos muito Felizes por você estar se juntando a nós".</p>
			<h4 class=" m-3 p-2 border rounded">Dados Pessoais</h4>

					<form class="form container-fluid" action="cadastrar.php" method="POST">
						<div class="row">
							<div class="col-md-8 form-group">
								<label for="inNome">Nome</label>
								<input class="form-control" type="text" name="nome" id="inNome" required="" placeholder="Ex.: Manoel Júnior">
							</div>
							<div class="col-md-4 form-group">
								<label for="inCpf">CPF</label>
								<input class="form-control" type="text" name="cpf" id="inCpf" required="" placeholder="Ex.: 060.000.000.00">
							</div>
							<div class="col-md-7 form-group">
								<label for="inEmail">Email</label>
								<input class="form-control" type="text" name="email" id="inEmail" required="" placeholder="Ex.: manoel@junior.com">
							</div>
							<div class="col-md-5 form-group">
								<label for="inNascimento">Data de Nascimento</label>
								<input class="form-control" type="date" name="nascimento" id="inNascimento" required="">
							</div>

							<div class="col-md-4">
								<label>Sexo</label>
									<div class="form">
									<div class="radio mr-2">
										<input type="radio" name="sexo" value="1"><span>Masc</span>
									</div>
									<div class="radio">
										<input type="radio" name="sexo" value="2"><span>Fem</span>
									</div>
									</div>
							</div>
							<div class="col-md-4">
								<label for="inTelefone">Telefone</label>
								<input class="form-control" type="numeric" id="inTelefone" name="telefone" required="" placeholder="Ex.: 63 32174371">
							</div>
							<div class="col-md-4">
								<label for="inCelular">Celular</label>
								<input class="form-control" type="numeric" id="inCelular" name="celular" placeholder="Ex.: 63 99217-4371">
							</div>

							<!--Area de manupulação de endereço-->
							<h4 class=" w-100 m-3 p-2 border rounded">Dados de Endereço</h4>
							<div class="col-md-7">
								<label for="inLogradouro">Logradouro</label>
								<input class="form-control" type="text" name="logradouro" id="inLogradouro" required="" placeholder="Ex.: Av. Juscelino K. Alameda 03 Nº 47 ">
							</div>
							<div class="col-md-5">
								<label for="inBairro">Bairro</label>
								<input class="form-control" type="text" name="bairro" id="inBairro" required="" placeholder="Ex.: Plano Diretor Norte">
							</div>
							<div class="col-md-8">
								<label for="inComplemento">Complemento</label>
								<input class="form-control" type="text" name="complemento" id="inComplemento" placeholder="Ex.: Em frente ao mercado Big">
							</div>
							<div class="col-md-4">
								<label for="inCep">CEP</label>
								<input class="form-control" type="tel" name="cep" id="inCep" required="" placeholder="Ex.: 77000-000">
							</div>
							<div class="col-md-4">
								<label>Cidade</label>
								<input type="text" name="cidade" class="form-control" required="" placeholder="Ex.: PALMAS">
							</div>
							<div class="col-md-4">
								<label>Estado</label>
								<select class="form-control" required="" name="estado">
									<option value="3">AC</option>
									<option value="4">AL</option>
									<option value="5">AP</option>
									<option value="6">AM</option>
									<option value="7">BA</option>
									<option value="8">DF</option>
									<option value="2">PI</option>
									<option value="1">TO</option>
								</select>
							</div>

							<!--Area de manupulação de Senha-->
							<h4 class=" m-3 w-100 p-2 border rounded">Segurança</h4>
							<div class="col-md-6">
								<label for="inSenha">Senha</label>
								<input class="form-control" type="password" name="senha" id="inSenha" required="" placeholder="***************">
							</div>
							<div class="col-md-6">
								<label for="inSenhaConfirmada">Confirmar Senha</label>
								<input class="form-control" type="password" name="senhaConfirmada" id="inSenhaConfirmada" required="" placeholder="*************">
							</div>
							<div class="form-group col-md-6 offset-md-3">
								<h5 class="text-center my-3">Tudo Pronto...</h5>
								<button type="submit" class="form-control btn">Prosseguir</button>
							</div>
						</div>
				</form>
		</div>
	</div>
</div>

<?php
    include "../php/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="stylecadastro.css">
	<title>Exynos Tech</title>
	<link rel="shortcut icon" href="../img/ExynosLogo.png" type="imagem">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


	<!-- mascara data/ telefone/ cpf e valida cpf-->
<script src="mascaravalida.js"></script>
<script type="text/javascript" src="mask/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="mask/jquery.maskedinput-1.1.4.pack.js"></script>
<script type="text/javascript">$(document).ready(function(){$("#cpf").mask("999.999.999-99");});</script>
	

</head>
<body>

	<div id="parallelogram"></div>

	<section>
		<form method="post" action="../php/inseri.php" onsubmit="return validarDataNascimento()">
            
			<h1>Cadastro</h1>
			<fieldset>
				<div class="container">
					<input type="text" required name="nome" id="nome" autofocus>

					<label>Nome Completo</label>
				</div>

				<div class="container">
				<input type="text" name="cpf" id="cpf" onblur="javascript: validarCPF(this.value);" onkeypress="javascript: mascara(this, cpf_mask);"  class="form-control" required /><br>

					<label>Cpf</label>
				</div>

                <div>
                    <label class="data">Data de Nascimento:</label><br>
					<input type="date" required name="datenasc" id="datenasc" class="date" mid="1933-01-01" max="2005-12-31">
				</div>
			</fieldset>

			<fieldset>
				<div class="container">
					<input type="email" required name="email" id="email">
					<label>E-mail</label>
				</div>
			</fieldset>

			<fieldset>
				<div class="container">
					<input type="password" required name="senha" id="senha">
					<label>Senha</label>
				</div>

				<div class="container">
					<input type="tel" required name="tel" id="tel">
					<label>Telefone</label>
				</div>
                <div class="container">
					<input type="text" required name="cep" id="cep">
					<label>Cep</label>
				</div>
			</fieldset>

            
            

			<fieldset>

                <input type="submit" name="submit" id="submit" value="Criar conta" class="button" onclick="criar()" >

				<script>
					function criar(){
						if (dataNascimento > dataAtual) {
							alert("Data de nascimento inválida!");
				            document.getElementById("dataNascimento").value = "";
				            return false;
						}
						else{
							alert('Usuario criado com sucesso!');
						}
					}
				</script>
                
			</fieldset>
    

            <p>Já tenho uma conta:</p><a class="login" href="../login/login.php">Login</a>
		</form>

		<img class="img" src="../img/ExynosLogo.png" alt="">
		
	</section>

	<script>
		$(document).ready(function(){
			$('#cep').mask('00000-000');
			$('#tel').mask('(00)00000-0000');
		});

		function validarDataNascimento() {
			var dataNascimento = new Date(document.getElementById("datenasc").value);
			var dataAtual = new Date();
			if (dataNascimento > dataAtual) {
				alert("Data de nascimento inválida!");
				document.getElementById("dataNascimento").value = "";
				return false;
			}
				return true;

		}

	</script>

</body>
</html>
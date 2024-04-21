<?php

include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM cadastro WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../img/ExynosLogo.png" type="imagem">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<body>
    <style>
      body {
  background: #222327;
}
      a{
        font-size: 20px;
      }
      label{
        color: white;
      }
      .boxes{
        display: flex;
        width: 100vh;
        justify-content: space-between;
      }
      .titul{
	font-size: 23px;
	background-color: #6b6b6b;
}
.sair{
	font-size: 25px;
	color: blue;
	text-decoration: none;
  color: #29fd53;
  background:#6b6b6b;
  padding: 10px;
  border-radius: 50%;
  top: 20px;
  position: absolute;
  left: 20px;
}
.sair:hover{
  scale: 1.2;
  background:rgb(3, 34, 1);
  color: white;
}
.titul2{
	border-bottom: 1px solid #29fd53;
	padding: 10px;
}
input{
  outline: none;
  border: 2px solid #29fd53;
  border-radius: 40px;
  background-color: transparent;
  color: white;
  height: 40px;
  text-align: center;

}
h1{
  color: white;

}
.btn{
background-color: #6b6b6b;
color: #29fd53;
border: 2px solid #29fd53;
border-radius: 40px;
height: 40px;
width: 100%;
cursor: pointer;
}
.btn:hover{
  background-color: #29fd53;
color: white;
}
    </style>
    <table width="100%" border="1" class="table table-bordered table-striped">
 <thead class="thead-dark">
  <tr>
    <td align="center"  class="titul" >Nome:</td>
    <td align="center" class="titul" >Email:</td>
    <td align="center" class="titul" >Senha:</td>
    <td align="center" class="titul"  >Nivel:</td>
    <td align="center" class="titul"  >Cpf:</td>
    <td align="center" class="titul"  >Data de Nasc:</td>
    <td align="center" class="titul"  >Telefone:</td>
    <td align="center"  class="titul" >Cep:</td>
  </tr>

		<a href="select.php" class="sair">Voltar</a><br>
        <center><div class="container">
        
		<div class="col-md-6  form-group text-center"><br>
    <h1 class="h1"> Editar Usuario</h1><br>
    <br>
		
		<form method="POST" action="update.php" class="form-group">

			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
<tr>
      <td align="center" class="titul2"><input type="text" name="nome" placeholder="Digite o nome completo" class="form-control"value="<?php echo $row_usuario['nome']; ?>"></td>
			<td align="center" class="titul2"><input type="text" name="email" placeholder="Digite o nome completo" class="form-control"value="<?php echo $row_usuario['email']; ?>"></td>
			<td align="center" class="titul2"><input type="text" name="senha" placeholder="Digite o nome completo" class="form-control"value="<?php echo $row_usuario['senha']; ?>"></td>
			<td align="center" class="titul2"><input type="text" name="nivel" placeholder="Digite o nome completo" class="form-control"value="<?php echo $row_usuario['nivel']; ?>"></td>
			<td align="center" class="titul2"><input type="text" name="cpf" placeholder="Digite o nome completo" class="form-control"value="<?php echo $row_usuario['cpf']; ?>"></td>
			<td align="center" class="titul2"><input type="text" name="datenasc" placeholder="Digite o nome completo" class="form-control"value="<?php echo $row_usuario['datenasc']; ?>"></td>
			<td align="center" class="titul2"><input type="text" name="tel" placeholder="Digite o nome completo" class="form-control"value="<?php echo $row_usuario['tel']; ?>"></td>
			<td align="center" class="titul2"><input type="text" name="cep" placeholder="Digite o nome completo" class="form-control"value="<?php echo $row_usuario['cep']; ?>"></td>
    </tr>
        </div>
        </table><br>
        <button type="submit" class="btn btn-primary btn-block"> Editar </button>
        </form>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

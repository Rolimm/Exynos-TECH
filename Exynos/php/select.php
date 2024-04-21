<?php
include "conexao.php";

?>

<?php

session_start();

	if($_SESSION['nivel'] == "adm" )  {

		}else{
	
			
			header("Location:index.php");
		exit;
			
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
<title> Exynos Tech</title>
<link rel="shortcut icon" href="../img/ExynosLogo.png" type="imagem">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
  background: #222327;
}
tr,td{
  color: #29fd53;
	border: none;
	color: white;
	padding: 5px;
}
tr{
	font-size: 21px;
  color: #29fd53;
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
  left: 20px;
  position: absolute;
}
.sair:hover{
  scale: 1.2;
  background:rgb(3, 34, 1);
  color: white;
}
.dif{
	border-bottom: 1px solid blue;
	padding: 10px;
}
.dif2{
	border-bottom: 1px solid red;
	padding: 10px;
}
a{
	text-decoration: none;
	z-index: 99999;
}
.edit{
color: blue;
}
.delet{
	color: red;
}
.titul{
	font-size: 23px;
	background-color: #6b6b6b;
}
.titul2{
	border-bottom: 1px solid #29fd53;
	padding: 10px;
}
.search-box{
  position: absolute;
  top: 20px;
  right: 0;
  height: 40px;
  background:rgb(3, 34, 1);
  padding: 10px;
  border-radius: 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.search-txt{
  border: none;
  background: none;
  outline: none;
  color: white;
  font-size: 16px;
  line-height: 40px;
  transition: .8s;
}
.search-btn{
background-color: #29fd53;
border-radius: 50%;
width: 40px;
height: 40px;
display: flex;
justify-content: center;
align-items: center;
transition: .5s;

}
.search-box:hover > .search-txt{
  padding: 0 6px;
}
.search-box:hover >.search-btn{
  background: white;
}
</style>
</head>


<body>
<a class="sair" href ="logout.php"> Voltar </a> <br><br><br>
<table width="100%" border="1" class="table table-bordered table-striped">
 <thead class="thead-dark">
  <tr>
  <td align="center" class="titul"  >ID:</td>
    <td align="center"  class="titul" >Nome:</td>
    <td align="center" class="titul" >Email:</td>
    <td align="center" class="titul" >Senha</td>
    <td align="center" class="titul"  >CPF:</td>
    <td align="center" class="titul"  >Data nascimento:</td>
    <td align="center" class="titul"  >Cep:</td>
    <td align="center" class="titul"  >Telefone:</td>
    <td align="center"  class="titul" >Nivel:</td>
     <td align="center"  class="titul" >Editar:</td>
    <td align="center" class="titul" >Deletar:</td>
  </tr>


<form action="select.php" method="GET">
                <div class="search-box">
                    <input name="busca" class="search-txt" placeholder="Buscar" type="text" value="<?php echo isset($_GET['busca']) ? htmlspecialchars($_GET['busca']) : ''; ?>">
                    <select name="tipo_busca" class="search-select">
                        <option value="nome" <?php if (isset($_GET['tipo_busca']) && $_GET['tipo_busca'] === 'nome') echo 'selected'; ?>>Nome</option>
                        <option value="email" <?php if (isset($_GET['tipo_busca']) && $_GET['tipo_busca'] === 'email') echo 'selected'; ?>>Email</option>
                    </select>
                    <button type="submit" class="search-btn"> <img src="../img/loupe.png" height="20" width="20"></button>
                </div>
            </form>
            <br><br>

<?php
            // Inicializa a variável de busca e o tipo de busca
            $busca = '';
            $tipo_busca = '';

            if (isset($_GET['busca'])) {
                $busca = $_GET['busca'];
            }

            if (isset($_GET['tipo_busca'])) {
                $tipo_busca = $_GET['tipo_busca'];
            }

            // Cria a consulta SQL
            if ($busca !== '') {
                if ($tipo_busca === 'nome') {
                    $result_usuarios = "SELECT * FROM cadastro WHERE nome LIKE '%$busca%'";
                } elseif ($tipo_busca === 'email') {
                    $result_usuarios = "SELECT * FROM cadastro WHERE email LIKE '%$busca%'";
                }
            } else {
                $result_usuarios = "SELECT * FROM cadastro ORDER BY nome ASC";
            }

            // Executa a consulta
            $resultado_usuarios = mysqli_query($conn, $result_usuarios);

            // Exibe os resultados
            while ($linha = mysqli_fetch_assoc($resultado_usuarios)) {
                // Processar e exibir os dados
            ?>
  
  <tr>
  <td align="center" class="titul2" ><?php echo $linha ['id']?></td>
    <td align="center" class="titul2" ><?php echo $linha ['nome']?></td>
    <td align="center" class="titul2" ><?php echo $linha ['email']?></td>
    <td align="center" class="titul2" ><?php echo $linha ['senha']?></td>
    <td align="center" class="titul2" ><?php echo $linha ['cpf']?></td>
    <td align="center"  class="titul2"><?php echo $linha ['datenasc']?></td>
    <td align="center" class="titul2" ><?php echo $linha ['cep']?></td>
    <td align="center" class="titul2" ><?php echo $linha ['tel']?></td>
    <td align="center" class="titul2" ><?php echo $linha ['nivel']?></td>
    <td align="center"  class="dif"><?php echo "<a class='edit' href ='editarusuario.php?&id=" .$linha["id"]."'>Editar</a>  "?></td>
    <td align="center"  class="dif2"><?php echo "<a class='delet' href ='deleta.php?&id=" .$linha["id"]."'>Deletar</a>  "?></td>
  </tr>
  
  <?php
  
  }
  ?>
</table>

</body>

</html>
<?php
include "conexao.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exynos Tech</title>
<link rel="shortcut icon" href="../img/ExynosLogo.png" type="imagem">
</head>
<body>

<?php
    session_start(); 
    //Incluindo a conexão com banco de dados   
    include_once("conexao.php");    
	
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);

        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM cadastro WHERE email = '$email' && senha = '$senha' ";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['id'] = $resultado['id'];
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['nivel'] = $resultado['nivel'];
            $_SESSION['email'] = $resultado['email'];
		}else{
			echo"Usuário não encontrado";
		}
            if($_SESSION['nivel'] == 'adm'){
                header("Location: select.php");
            }elseif($_SESSION['nivel'] == 'cliente'){
                header("Location: ../exynos/exynos.php");
            }else{
                $_SESSION['msn'] = "<p style='color:red;'>Usuário ou senha inválidos.</p>";
        header("Location:../index.php");
            }
		}
?>
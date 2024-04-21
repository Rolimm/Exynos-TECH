<?php
    include "../php/conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stylelogin.css"/>
    <link rel="shortcut icon" href="../img/ExynosLogo.png" type="imagem">
    <title>Exynos Tech</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="../php/valida.php">
    <div class="main-login">
        <div class="left-login">
            <h1></h1>
            <img src="../img/gifprisma.gif" class="left-login-image" alt="pc animaçao">
        </div>
        <div class="right-login">
            <div class="card-login">
                <a href="../index.php"><img src="../img/ExynosLogo.png" class="voltar" width="20px"> Voltar</a>
                <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="usuario"><i class="fa-solid fa-user"></i> Usuário</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu Email" class="inputUser" required>
                    </div>
                    <div class="textfield">
                        <label for="senha"><i class="fa-solid fa-lock"></i> Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua Senha"  class="inputUser" required>
                    </div>
                    
                    <input type="submit" name="enviar" id="enviar" value="Acessar" class="btn-login">

                    <a href="../cadastro/cadastro.php">Cadastrar</a>
            </div>
        </div>
    </div>
</form>


<script src="script.js"></script>
</body>
</html>
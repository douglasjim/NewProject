<?php 
//Serve para usar variaveis globais
session_start();

//Verifica se tem erro no banco de dados
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <form action="validarLogin.php" method="POST"><!-- Comando que envia os dados para o validarLogin.php-->
        <h1>Faça seu Login</h1>
        <?php 
			//Abrir PHP
			if(isset($_SESSION['mensagem'])):
				echo $_SESSION['mensagem'];
				unset($_SESSION['mensagem']);
            endif
			//Fechar PHP
		?>

        <label for="email">E-mail</label><br><!--Barra que pede o login-->
        <input type="email" name="email" required autofocus>
        <br>

        <label for="senha">Senha</label><br><!--Barra que pede a senha-->
        <input type="password" name="senha" autofocus required>
        <br>
        <br>

        <input type="submit" value="Entrar">
    </div>

</body>
</html>
<?php
//Serve para usar variaveis globais
session_start();

//Testa a conexão do banco de dados com o comando if criado no arquivo conexao.php
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css"><!--Importa o CSS-->
	<title>Cadastro</title>

	<header>
		<h1>Seja bem-vindo</h1>
		<h3>Aqui você pode fazer seu Cadastro</h3>
	</header>

</head>
<body>
	
	<div><!--DIV do formulario-->
		<form action="cadastro.php" method="GET"><!--Esse é o formulario que ira receber os dados do usuario-->
			<p>Faça seu cadastro</p>
			
			<?php 
			//Abrir PHP
			if(isset($_SESSION['mensagem'])){
				echo $_SESSION['mensagem'];
				unset($_SESSION['mensagem']);
			}
			//Fechar PHP
			?> 

			<label for="nome">Nome</label><br>
			<input type="text" name="nome" required autofocus><!--Esse recebe o nome do usuario-->
			<br>

			<label for="sobrenome">Sobrenome</label><br>
			<input for="text" name="sobrenome" required autofocus><!--Esse o sobrenome-->
			<br>
			<br>
			
			<legend>Selecione seu sexo</legend><br>
			<input type="radio" name="sexo" id="masc" value="homem"><!--Esse faz a seleção do sexo-->
			<label for="masc">Masculino</label><br>
			<input type="radio" name="fem" id="fem" value="mulher">
			<label for="fem">Feminino</label>
			<br>
			<br>

			<label for="idade">Idade</label><br>
			<input for="idade" name="idade" required autofocus><!--Esse a idade-->
			<br>

			<label for="endereco">Endereço</label><br>
			<input type="text" name="endereco" required autofocus><!--Esse o enderço-->
			<br>
			
			<label for="text" name="email">E-mail</label><br>
			<input type="email" name="email" required autofocus>
			<br>

			<label for="senha">Senha</label><br>
            <input type="password" name="senha" placeholder="Password" required>
            <br>

			<label for="confirmasenha">Confirme a senha</label><br>
            <input type="password" name="confirmasenha" placeholder="Password" required>
            <br>
			<br>

			<input type="submit" value="Enviar Dados"><br><!--Esse botão envia os dados-->
		</form>
	</div><!--Fim da div do formulario-->


</body>
</html>
<?php
//Deve ser sempre o primeiro comando caso queira avisar que um comando o dessa pagina foi um sucesso em outra pagina
session_start();

//Inclui o arquivo conexao.php
include_once("conexao.php");

//Variaveis que serão retiradas do usuario a partir do html ou front
$nome = $_GET["nome"];
$sobrenome = $_GET["sobrenome"];
$sexo = $_GET["sexo"];
$idade = $_GET["idade"];
$endereco = $_GET["endereco"];
$email = $_GET["email"];
$senha = $_GET["senha"];
$senhaconf = $_GET["confirmasenha"];

//esse comando server para inserir os dados no banco de dados
//A coluna ID não precisa pois ele se auto incrementa 
//a Variavel $sql recebe todos os dados das variaveis e envia ao banco de dados
$sql = "INSERT INTO usuarios (nome, sobrenome, sexo, idade, endereco, email, senha, senhaconf, criado, modificado) VALUES  ('$nome','$sobrenome','$idade','$sexo','$endereco','$email','$senha','$senhaconf','NOW()','NOW()')";

//Aqui usamos a variavel de conexão $connect e os dados reunidos $sql e mandamos pro mysql
$resultado = mysqli_query($connect, $sql);

//Este é um comando  que informa se os dados foram para o BD ou não
if(mysqli_insert_id($connect)):
    //Variavel global
    header ("Location: index.php");
    
    $_SESSION['mensagem'] = "<p>Usuario Cadastrado!!!<p>";
else:
    header ("Location: index.php");

    //Variavel global
    $_SESSION['mensagem'] = "<p>Erro no Cadastro!!!</p>";
endif;


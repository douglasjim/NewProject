<?php
//Serve para usar variaveis globais
session_start();

//Busca o banco de dados
include_once("conexao.php");

//Variaveis que serão recebidos do html ou do front end

//essas variaveis fazem um filtro no SQL e conectam com o BD além de receber o email e a senha via parametros
$email = mysqli_escape_string($connect,$_POST['email']);
$senha = mysqli_escape_string($connect,$_POST['senha']);


//Esse comando verifica no banco de dados se o email inserido é igual a um do banco de dados
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
//joga os comandos SQL para variavel $resultado
$resultado = mysqli_query($connect, $email);

//Verifica se o numero de linhas da variavel resultado é maior do que zero, se for é pq existe um registro no BD
if(mysqli_num_rows($resultado) > 0):

else:
    echo "Login não econtrado";
endif;



//Este é um comando  que informa se os dados foram para o BD ou não
if(mysqli_insert_id($connect)):
    header ("Location: login.php");
    //Variavel global
    //Mensasem se o login for efetuado
    $_SESSION['mensagem'] = "<p>Login Efetuado!!!<p>";
else: 
    header ("Location: login.php");

    //Variavel global
    //Mensagem se o login for negado
    $_SESSION['mensagem'] = "<p>Erro no Login!!!</p>";
endif;

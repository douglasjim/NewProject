<?php
//esse é o arquivo de conexão com o banco de dados

$servidor = "localhost"; //esse é o servidor local
$usuario = "root"; //nome do login do php MyAdmin
$senha = "";//Não tem senha
$dbname = "cadastros_crud";//nome do banco de dados

//Criar conexão com o banco de dados
//OBS: Usar sempre que for conectar com o Banco de dados
//$connect é variavel que esta armazenada a conexão
$connect = mysqli_connect($servidor,$usuario,$senha,$dbname);


//Esse comando serve para ver se o banco de dados esta com erro, ele sera utilizado no index.php
if($connect -> connect_errno):
    echo "erro com banco de dados Mysql: " . $connect -> connect_errno;
    exit();
endif;
<?php 
//Criando o arquivo de conexão
$host = "localhost";
$usuario = "root";
$senha = "32265256";
$banco="estoque";
$porta="3308";

$conexao= mysqli_connect($host,$usuario,$senha,$banco,$porta) or die("Não foi possivel conectar ao banco");
mysqli_select_db($conexao,$banco) or die("Não foi possivel encontrar esse banco");

<?php
$servidor = "localhost";
$banco = "begbin";
$usuario = "root";
$senha = "";

$conexao = mysql_connect($servidor,$usuario,$senha);

if (!$conexao){
	echo "não foi possivel conectar no servidor SQL" . mysql_error();
}

?>
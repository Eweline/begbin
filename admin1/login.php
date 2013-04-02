<?php require_once 'conexao.php';


	

//$login = $_POST['login'];
//$senha = $_POST['senha'];

$select = mysql_select_db($banco, $conexao);
$consulta = mysql_query("SELECT * FROM usuarios WHERE usuario = '$_POST[login]' AND senha = '$_POST[senha]'") or die(mysql_error());
$resultado = mysql_fetch_assoc($consulta);
$total = @mysql_num_rows($consulta);

if(!$resultado){
	echo "Nenhum usuário encontrado";
} else {
session_start();
	$_SESSION['usuariologin'] = $resultado['usuario'];
	$_SESSION['usuariosenha'] = $resultado['senha'];
	$_SESSION['usuarionome'] = $resultado['nome'];
	echo $_SESSION['usuariologado'];
	echo $_SESSION['usuariosenha'];
	header("Location:principal.php");
	exit;
}


?>
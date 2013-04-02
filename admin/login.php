<?php

	require_once "class/conexao.class.php";
	$conexao = new Conexao;
	$sqlAdmin = "SELECT usuario FROM usuario";
	$sqlSenha = "SELECT senha FROM usuario";

	$id = "";
	// consulta do banco de dados
	$admin = "admin";
	$senhaAdmin = "secreta";

	// verificar se o POST foi enviado
	if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
		// verificar se as informações são válidas
		if ($admin == $_POST['usuario'] && $senhaAdmin == $_POST['senha']){
			echo "Usuario valido.";
			// echo "Usu&aacute;rio v&aacute;lido.";

			// iniciar sessão
			session_start();

			//criando a variavel de sessão usuário e atribuindo o valor que veio do formulário
			$_SESSION['usuario'] = $_POST['usuario'];

			// rediciona para pagina secreta
			header("Location: index.php");

		} else{
			//senão mostrar mensagem de erro
			echo "Usuario invalido.";
		}
	} else{
		// senão mostrar uma mensagem de erro
		echo "nain! Falta o POST";
	}

?>
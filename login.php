<?php
	require_once "class/conexao.class.php";
	require_once "class/usuario.class.php";


	// verificar se o POST foi enviado


		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		
			$conexao = new Conexao;
			$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha';";

			$resultado = $conexao->executar($sql);
			$usu1 = $resultado->fetch_assoc();

			// iniciar sessão		
			if(!$resultado){
				echo "Nenhum usuário encontrado";
			} else {
			session_start();
				$_SESSION['usuario'] = $usu1['usuario'];
				$_SESSION['senha'] = $usu1['senha'];
				$_SESSION['id'] = $usu1['idUsuario'];
				echo $_SESSION['usuario'];
				echo $_SESSION['senha'];
				header("Location:index.php");
				exit;
			}
/*
			//criando a variavel de sessão usuário e atribuindo o valor que veio do formulário
			$_SESSION['usuario'] = $usu1['usuario'];

			if(isset($_SESSION['usuario'])){
			echo "Usuario valido.";
			// echo "Usu&aacute;rio v&aacute;lido.";

			// rediciona para pagina secreta
			header("Location: index.php");

		} else{
			//senão mostrar mensagem de erro para o usuário setado
			echo "Usuario invalido.";
	}

*/
?>
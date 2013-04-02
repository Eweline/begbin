<?php
	//require_once 'restringir-acesso.php';
	require_once '../class/conexao.class.php';
	require_once '../class/usuario.class.php';

	// verificar se o usuário e a senha foram enviados
	// verificar se o usuário não existe no banco
	// verificar se o usuário possui mais de três (>3) caracteres e TEM que ser somente letras
	// verificar se a senha possui mais de três caracteres

	// mostrar os erros para cada validação


	$usuario1 = new Usuario();

	// VERIFICAr se o usuário e a senha foram enviados
	if(isset($_POST['usuario']) && isset($_POST['senha'])){
		
		//pegando os valores da form e atriubindo variáveis
		$usuario1->nome = $_POST['nome'];
		$usuario1->sobrenome = $_POST['sobrenome'];
		$usuario1->endereco = $_POST['endereco'];
		$usuario1->telefone = $_POST['telefone'];
		$usuario1->rg = $_POST['rg'];
		$usuario1->cpf = $_POST['cpf'];
		$usuario1->usuario = trim(strtolower($_POST['usuario']));
		$usuario1->senha = $_POST['senha'];




		// verificar se o usuário não existe no banco
		$conexao = new Conexao();
		$sql = "SELECT usuario FROM usuarios WHERE usuario LIKE '{$usuario1->usuario}';";



		// se encontrar um usuário no banco, é porque já existe, né?
		$resultado = $conexao->executar($sql);
		if($user = $resultado->fetch_assoc()){
			echo "O usuário já existe";
			exit();
		}


		/*if(!preg_match("/^[a-z]{3,}/",$usuario)){
			echo "<div class='alert alert-error'>";
			echo htmlentities("Usuário inválido");
			echo "</div>";
			exit();
		} */


			//senha
			/*if(!preg_match("/^[a-zA-Z0-9]{3,}/", $senha)){
				echo "Senha deve possuir mais que 3 caracteres";
				exit();
			}*/

		$usuario1->validaSenha();

		// inserir no banco
		$senhaCriptografada = MD5($usuario1->senha);

		$sqlInserir = "INSERT INTO usuarios (nome, sobrenome, endereco, telefone, rg, cpf, usuario, senha) VALUES ('{$usuario1->nome}', '{$usuario1->sobrenome}', '{$usuario1->endereco}', '{$usuario1->telefone}', '{$usuario1->rg}', '{$usuario1->cpf}', '{$usuario1->usuario}', '$senhaCriptografada');";

		if($resultado = $conexao->executar($sqlInserir)){
			echo htmlentities("Usuário $usuario1->usuario, inserido com sucesso.");
		}

		// não foi enviado o post
	}
?>
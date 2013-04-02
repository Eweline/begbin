<?php 
	require_once '../restringir-acesso.php';
	require_once '../class/conexao.class.php';
	require_once '../class/usuario.class.php';

	//verificar se veio o post
		
	$usuario1 = new Usuario();


	if (isset($_POST['id'])) {
		$conexao = new Conexao();

		$usuario1->id = (int) $_POST['id'];
		$usuario1->nome = $_POST['nome'];
		$usuario1->sobrenome = $_POST['sobrenome'];
		$usuario1->endereco = $_POST['endereco'];
		$usuario1->telefone = $_POST['telefone'];
		$usuario1->rg = $_POST['rg'];
		$usuario1->cpf = $_POST['cpf'];
		$usuario1->usuario = $_POST['usuario'];
		$usuario1->senha = $_POST['senha'];

		$usuario1->validaEmail();

		if ($usuario1->senha == "") {
			$sql = "UPDATE usuarios SET nome = '{$usuario1->nome}', sobrenome = '{$usuario1->sobrenome}', endereco = '{$usuario1->endereco}', telefone = '{$usuario1->telefone}', rg = '{$usuario1->rg}', cpf = '{$usuario1->cpf}', usuario = '{$usuario1->usuario}'  WHERE id = {$usuario1->id};";
		} else {
			$sql = "UPDATE usuarios SET nome = '{$usuario1->nome}', sobrenome = '{$usuario1->sobrenome}', endereco = '{$usuario1->endereco}', telefone = '{$usuario1->telefone}', rg = '{$usuario1->rg}', cpf = '{$usuario1->cpf}', usuario = '{$usuario1->usuario}', senha = '{$usuario1->senha}'  WHERE id = {$usuario1->id};";

		}

	$resultado = $conexao->executar($sql);

		if ($resultado) {
			echo "Atualizado com Sucesso";
			
		} else {
			echo "Falha na atualização";
			echo  "<p><a href='index.php'>Voltar para lista de usuarios</a></p>";
				}
		}

		echo  "<p><a href='index.php'>Voltar para lista de usuarios</a></p>";

?>
<?php
	//require_once 'restringir-acesso.php';
	require_once 'class/conexao.class.php';
	require_once 'class/contato.class.php';

	// verificar se o usuário e a senha foram enviados
	// verificar se o usuário não existe no banco
	// verificar se o usuário possui mais de três (>3) caracteres e TEM que ser somente letras
	// verificar se a senha possui mais de três caracteres

	// mostrar os erros para cada validação


	$cont1 = new Contato();
		
		//pegando os valores da form e atriubindo variáveis
		$cont1->nome = $_POST['nome'];
		$cont1->email = $_POST['email'];
		$cont1->mensagem = $_POST['mensagem'];
		

		// verificar se o usuário não existe no banco
		$conexao = new Conexao();

		$sqlInserir = "INSERT INTO contato (nome, email, mensagem) VALUES ('{$cont1->nome}', '{$cont1->email}', '{$cont1->mensagem}');";

		if($resultado = $conexao->executar($sqlInserir)){
			echo htmlentities("Mensagem enviada com sucesso.");
		}
?>
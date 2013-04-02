<?php
	require_once '../restringir-acesso.php';
	require_once '../class/conexao.class.php';
	require_once '../class/produto.class.php';

	// verificar se o usuário e a senha foram enviados
	// verificar se o usuário não existe no banco
	// verificar se o usuário possui mais de três (>3) caracteres e TEM que ser somente letras
	// verificar se a senha possui mais de três caracteres

	// mostrar os erros para cada validação


	$prod1 = new Produto();

	// VERIFICAr se o usuário e a senha foram enviados
	if(isset($_SESSION['usuario'])){
		
		$prod1->id = (int) $_POST['id'];

		//pegando os valores da form e atriubindo variáveis
		$prod1->idCategoria = (int) $_POST['categoria'];
		$prod1->nome = $_POST['nome'];
		$prod1->preco = $_POST["preco"];
		$prod1->descricao = $_POST['descricao'];
		$prod1->foto = $_POST['foto'];
		$prod1->quant = $_POST['quant'];
		


		// verificar se o usuário não existe no banco
		$conexao = new Conexao();
		$sql = "SELECT nome FROM produtos WHERE nome LIKE '{$prod1->nome}';";



		// se encontrar um usuário no banco, é porque já existe, né?
		$resultado = $conexao->executar($sql);
		if($prod = $resultado->fetch_assoc()){
			echo "O produto já existe";
			exit();
		}



		$sqlInserir = "INSERT INTO produtos (idProduto, idCategoria, nome, preco, descricao, foto, quant) VALUES ({$prod1->id}, {$prod1->idCategoria}, '{$prod1->nome}', '{$prod1->preco}', '{$prod1->descricao}', '{$prod1->foto}', {$prod1->quant});";

		if($resultado = $conexao->executar($sqlInserir)){
			echo htmlentities("Produto $prod1->nome, inserido com sucesso.");
			echo  "<br/><a href='index.php'>Listar Produtos</a>";
		}

		echo "</br><a class='btn btn-success' href='adicionar.php'> Adicionar + um </a>";
		// não foi enviado o post
	}
?>
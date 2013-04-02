<?php 
	require_once '../restringir-acesso.php';
	require_once '../class/conexao.class.php';
	require_once '../class/produto.class.php';

	//verificar se veio o post
		
	$prod1 = new Produto();


	if (isset($_SESSION['usuario']) && isset($_POST['id'])) {
		
		$prod1->id = (int) $_POST['id'];
		$prod1->nome = $_POST['nome'];
		$prod1->preco = $_POST['preco'];
		$prod1->descricao = $_POST['descricao'];
		$prod1->foto = $_POST['foto'];
		$prod1->quant = $_POST['quant'];

		$conexao = new Conexao();
		$sql = "UPDATE produtos SET nome = '{$prod1->nome}', preco = '{$prod1->preco}', descricao = '{$prod1->descricao}', foto = '{$prod1->foto}', quant = {$prod1->quant} WHERE idProduto = {$prod1->id};";
		

		$resultado = $conexao->executar($sql);

		if ($resultado) {
			echo "<div class='alert alert-success'> Atualizado com Sucesso </div>";
			
		} else {
			echo "<div class='alert alert-error'>Falha na atualização</div>";
			echo  "<p><a href='index.php'>Voltar para lista de produtos</a></p>";
			}
	}

		echo  "<p><a href='index.php'>Voltar para lista de produtos</a></p>";

?>
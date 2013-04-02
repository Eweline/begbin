<?php 
	require_once '../restringir-acesso.php';
	require_once '../class/conexao.class.php';
	require_once '../class/categoria.class.php';

	//verificar se veio o post
		
	$categoria1 = new Categoria();

	if (isset($_POST['idCategoria'])) {

		$categoria1->id = $_POST['idCategoria'];
		$categoria1->categoria = $_POST['categoria'];


		$conexao = new Conexao();
		$sql = "SELECT * FROM categorias WHERE categoria LIKE '{$categoria1->categoria}';";


		// se encontrar um usuário no banco, é porque já existe, né?
		$resultado2 = $conexao->executar($sql);
		if($cat = $resultado2->fetch_assoc()){
			echo "A categoria já existe";
			exit();
		}

	
			$sqlInserir = "UPDATE categorias SET categoria = '{$categoria1->categoria}' WHERE idCategoria = {$categoria1->id};";

	$resultado = $conexao->executar($sqlInserir);

		if ($resultado) {
			echo "<div class='alert alert-success'>Atualizado com Sucesso</div>";
			
		} else {
			echo "<div class='alert alert-error'>Falha na atualização<div>";
			echo  "<p><a href='index.php'>Voltar para lista de categorias</a></p>";
				}
	}

		echo  "<p><a href='index.php'>Voltar para lista de categorias</a></p>";

?>
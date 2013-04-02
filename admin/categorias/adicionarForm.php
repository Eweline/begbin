<?php
	require_once '../restringir-acesso.php';
	require_once '../class/conexao.class.php';
	require_once '../class/categoria.class.php';


	$categoria1 = new Categoria();

	// VERIFICAr se o usuário e a senha foram enviados
	if(isset($_SESSION['usuario'])){
		
		//pegando os valores da form e atriubindo variáveis
		$categoria1->categoria = $_POST['categoria'];



		// verificar se não existe no banco
		$conexao = new Conexao();
		$sql = "SELECT * FROM categorias WHERE categoria LIKE '{$categoria1->categoria}';";



		// se encontrar um usuário no banco, é porque já existe, né?
		$resultado = $conexao->executar($sql);
		if($cat = $resultado->fetch_assoc()){
			echo "A categoria já existe";
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

		// inserir no banco

		$sqlInserir = "INSERT INTO categorias (categoria) VALUES ('{$categoria1->categoria}');";

		if($resultado = $conexao->executar($sqlInserir)){
			echo "<div class='alert alert-success'>" . htmlentities("Categoria $categoria1->categoria, inserida com sucesso.") . "</div>";
			echo  "<br/><a href='index.php'>Listar Categorias</a>";
		} else {
			echo "<h1>Não deu certo, bocó</h1>";
		}

		echo "</br><a class='btn btn-success' href='adicionar.php'> Adicionar + um </a>";
		// não foi enviado o post
	}
?>
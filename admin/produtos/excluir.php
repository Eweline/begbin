<?php 
	require_once '../restringir-acesso.php';
	require_once '../class/conexao.class.php';
	require_once '../class/produto.class.php';

$prod1 = new Produto();
//$usuario1->id= '';

	//Verificar se existe o parametro ID e não seja vazio
	if (isset($_GET['id']) && !empty($_GET['id'])) {

	//transformar/converter para int
		$prod1->id = (int) $_GET['id'];
	

		//$nome = $_POST['nome'];

	} else{
		header("Location: index.php");
		exit();
	}
	// Se for inteiro e maior que 0
	if (is_int($prod1->id) && $prod1->id > 0) {
		$conexao = new Conexao();

		$sql = "DELETE FROM produtos WHERE idProduto = {$prod1->id};";

		$resultado = $conexao->executar($sql);
	} else {
		echo "<div class='alert alert-error'>";
		echo "Valor do parametro invalido";
		echo "</div>";
	exit();

}

	
	$titulo = "Excluir Usuário";
  	include_once "../includes/head.php";
  	include_once "../includes/menu.php";



?>

	<div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Menu Lateral</li>
              <li><a href='index.php'>Produtos</a></li>
              <li><a href='adicionar.php'>Adicionar Produto</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
          	<h4>O produto com</h4>
          	<h1></h1>
            
            <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
          </div>
          <div class="row-fluid">
          	<div class="alert alert-success">
				<p> ID#<h2><?php echo $prod1->id; ?></h2> foi excluido com sucesso!</p>
			</div><!-- /alert -->
			<p><a href="index.php">&laquo; Voltar </a></p>
		
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

            <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->


</body>
</html>
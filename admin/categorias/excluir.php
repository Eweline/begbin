<?php 
	require_once '../restringir-acesso.php';
	require_once '../class/conexao.class.php';
	require_once '../class/categoria.class.php';

$categoria1 = new Categoria();
//$usuario1->id= '';

	//Verificar se existe o parametro ID e não seja vazio
	if (isset($_GET['id']) && !empty($_GET['id'])) {

	//transformar/converter para int
		$categoria1->id = (int) $_GET['id'];
		//$categoria1->categoria = $_GET['categoria'];

		//$nome = $_POST['nome'];

	} else{
		header("Location: index.php");
		exit();
	}
	// Se for inteiro e maior que 0
	if (is_int($categoria1->id) && $categoria1->id > 0) {
		$conexao = new Conexao();

		$sql = "DELETE FROM categorias WHERE idCategoria = {$categoria1->id};";

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
              <li><a href='index.php'>Categorias</a></li>
              <li><a href='adicionar.php'>Adicionar categoria</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
          	<h4>Categoria: </h4>
          	<h1></h1>
            
            <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
          </div>
          <div class="row-fluid">
          	<div class="alert alert-success">
				<p> e ID#<h2><?php echo $categoria1->id; ?></h2> excluida com sucesso!</p>
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
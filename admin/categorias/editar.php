<?php
	
	$titulo = "BEGbIN - Editar Categoria";
	include_once "../includes/head.php";
	include_once "../includes/menu.php";

	require_once '../restringir-acesso.php';
	require_once '../class/conexao.class.php';


$id= '';

	//Verificar se existe o parametro ID e não seja vazio
	if (isset($_GET['id']) && !empty($_GET['id'])) {

	//transformar/converter para int
		$id = (int) $_GET['id'];

	} else{
		header("Location: index.php");
		exit();
	}
	// Se for inteiro e maior que 0
	if (is_int($id) && $id > 0) {
		$conexao = new Conexao();

		$sql = "SELECT * FROM categorias WHERE idCategoria = $id;";

		$resultado = $conexao->executar($sql);
	} else {
	echo "Valor do parametro invalido";
	exit();

}


?>


		<div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Menu Lateral</li>
              <li><a href="index.php">Lista de Categorias</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>Editar Categoria</h1>
            
            <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
          </div>
          <div class="row-fluid">
     
			<?php if($categoria = $resultado->fetch_assoc()) { ?>
						
				<form action="editaForm.php" method="post">
					<fieldset>
						<legend>
						Editar categoria #<?php echo $categoria['categoria'];?>
						</legend>
						
						<input type="hidden" name="idCategoria" value="<?php echo $categoria['idCategoria'];?>">
						 
						<p><label>Categoria </label>
						<input type="text" name="categoria" value="<?php echo $categoria['categoria'];?>"> </p>
						
						
						<p><button class="btn btn-info">Atualizar</button></p>
						
					</fieldset>
				</form>

	<p>
		<a href=""></a>
	</p>

<?php } else { ?>
<p>Usuario não encontrado</p>
<p><a href='../index.php'>Voltar para pagina de login</a></p>
<?php } ?>

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
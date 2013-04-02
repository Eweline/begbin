<?php
	
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

		$sql = "SELECT * FROM produtos WHERE idProduto = $id;";

		$resultado = $conexao->executar($sql);
	} else {
	echo "Valor do parametro invalido";
	exit();

}

$titulo = "BEGbin - Editar produto";
  include_once "../includes/head.php";

?>


		<div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Menu Lateral</li>
              <li><a href="index.php">Lista de Produtos</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>Editar Produto</h1>
            
            <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
          </div>
          <div class="row-fluid">
     
			<?php if($produto = $resultado->fetch_assoc()) { ?>
						
				<form action="editaForm.php" method="post">
					<fieldset>
						<legend>
						Editar Produto #<?php echo $produto['idProduto'];?>
						</legend>
						
						<input type="hidden" name="id" value="<?php echo $produto['idProduto'];?>">
						 
						<p><label>Produto </label>
						<input type="text" name="nome" value="<?php echo $produto['nome'];?>"> </p>
						
						<p><label>Preço </label>
						<input type="text" name="preco" value="<?php echo $produto['preco'];?>"> </p>

						<p><label>Quantidade </label>
						<input type="text" name="quant" value="<?php echo $produto['quant'];?>"> </p>

						<p><label>Foto </label>
						<input type="text" name="foto" value="<?php echo $produto['foto'];?>"> </p>


						<p><label>Descrição </label>
						<textarea rows='7' cows='10' name="descricao" value="<?php echo $produto['descricao'];?>"></textarea>
						
						
						<p><button class="btn btn-info">Atualizar</button></p>
						
					</fieldset>
				</form>

	<p>
		<a href=""></a>
	</p>

<?php } else { ?>
<p>Produto não encontrado</p>
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
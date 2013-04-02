<?php 
	$titulo = "Usuários - Mostrar Dados";
  	include_once "../includes/head.php";
  	include_once "../includes/menu.php";

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

		$sql = "SELECT * FROM usuarios WHERE id = $id;";

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
              <li><a href='index.php'>Usuários</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
          	<h3>Nome:</h3>
            	<?php if($usuario = $resultado->fetch_assoc()) { ?>
				<h1><?php echo $usuario['nome'] . " " . $usuario['sobrenome']; ?><h1></p>
            
            <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
          </div>
          <div class="row-fluid">

				<p><b>Usuário:</b> <?php echo $usuario['usuario']; ?></p>
				<p><b>Acesso:</b> <?php echo $usuario['acesso']; ?></p>
				<?php } else { ?>
				<p>Usuario não encontrado</p>
				<p><a href='index.php'>Voltar para pagina de usuários</a></p>
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
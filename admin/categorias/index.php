<?php 
	$titulo = "Admin - Categorias";
  include_once "../includes/head.php";
  include_once "../includes/menu.php";

	require_once '../class/conexao.class.php';
	$conexao = new Conexao();
	$sql = "SELECT * FROM categorias";
	//$senha = "SELECT senha FROM usuarios WHERE id = 1;";
	$resultado = $conexao->executar($sql);
	//$resul = $conexao->executar($senha);
	


?>

	<div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Menu Lateral</li>
              <div><li><a class="btn btn-success" href="adicionar.php">Adicionar Categoria</a></li></div>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>Categorias</h1>
            
            <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
          </div><!-- hero-unit -->
          
          <div class="row-fluid">
          	 <h4>Lista de Categorias</h4>

			<table class="table table-hover">
			  <tr>
				<th>Codigo</th>
				<th>Categoria</th>
				<th>Ações</th>
			</tr>
			<?php while($categoria = $resultado->fetch_assoc()){ ?>

			<tr>
				<td><?php echo $categoria['idCategoria'];?></td>
				<td><?php echo $categoria['categoria'];?></td>
				<?php if(isset($_SESSION['usuario'])){ ?>
				<td><a class="btn btn-success" href="mostrar.php?id=<?php echo $categoria['idCategoria'];?>"> Mostrar </a> </td> 
				<td><a class="btn btn-warning" href="editar.php?id=<?php echo $categoria['idCategoria'];?>"> Editar </a> </td>
				<td><a class="btn btn-danger" href="excluir.php?id=<?php echo $categoria['idCategoria'];?>" onClick="return confirm('Você tem certeza?');"> Excluir </a> </td>
					<?php } else { ?><td><a class="btn btn-success" href="mostrar.php?id=<?php echo $categoria['idCategoria'];?>"> Mostrar </a> </td> <?php }?>
			</tr>
	<?php } ?>

		</table>
	</body>
</html>
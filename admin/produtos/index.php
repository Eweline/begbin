<?php 
	$titulo = "Admin - Produtos";
  include_once "../includes/head.php";
  include_once "../includes/menu.php";

	require_once '../class/conexao.class.php';
	$conexao = new Conexao();
	$sql = "SELECT * FROM produtos";
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
              <div><li><a class="btn btn-success" href="adicionar.php">Adicionar Produto</a></li></div>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>Produtos</h1>
            
            <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
          </div><!-- hero-unit -->
          
          <div class="row-fluid">
          	 <h4>Lista de Produtos</h4>

			<table class="table table-hover">
			  <tr>
				<th>Codigo</th>
				<th>Produto</th>
				<th>IdCategoria</th>
				<th>Preço</th>
				<th>Descrição</th>
				<th>Foto</th>
				<th>Ações</th>
			</tr>
			<?php while($produto = $resultado->fetch_assoc()){ ?>

			<tr>
				<td><?php echo $produto["idProduto"];?></td>
				<td><?php echo $produto["nome"];?></td>
				<td><?php echo $produto["idCategoria"];?></td>
				<td><?php echo $produto["preco"];?></td>
				<td><?php echo $produto["descricao"];?></td>
				<td><?php echo $produto["foto"];?></td>
				<?php if(isset($_SESSION['usuario'])){ ?>
				<td><a class="btn btn-warning" href="editar.php?id=<?php echo $produto['idProduto'];?>"> Editar </a> </td>
				<td><a class="btn btn-success" href="mostrar.php?id=<?php echo $produto['idProduto'];?>"> Mostrar </a> </td> 
				<td><a class="btn btn-danger" href="excluir.php?id=<?php echo $produto['idProduto'];?>" onClick="return confirm('Você tem certeza?');"> Excluir </a> </td>
					<?php } else { ?><td><a class="btn btn-success" href="mostrar.php?id=<?php echo $produto['idProduto'];?>"> Mostrar </a> </td> <?php }?>
			</tr>
	<?php } ?>

		</table>
	</body>
</html>
<?php 
	require_once "class/conexao.class.php";
	$conexao = new Conexao();
	$sql = "SELECT * FROM produtos WHERE idCategoria = 2;";
	$resultado = $conexao->executar($sql);


?>
	<h1>Cadernos</h1>
		<?php while($caderno = $resultado->fetch_assoc()){
			echo "<div class='img-block'> <img width='300' height='200' class='img' src='/begbin/img/cadernos/" . $caderno['foto'] . "'/></br>";
		?>
			
			 <center><a class='btn btn-danger' href="/begbin/paginas/produtos/email.php?id=<?php echo $caderno['idProduto'];?>"> Requisitar </a></center>
			 <center><a class='btn' href="/begbin/paginas/produtos/produto.php?id=<?php echo $caderno['idProduto'];?>"> Ver </a></center>
			</div>
			<?php } ?>



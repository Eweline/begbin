<?php 
	require_once "class/conexao.class.php";
	$conexao = new Conexao();
	$sql = "SELECT * FROM produtos WHERE idCategoria = 1;";
	$resultado = $conexao->executar($sql);


?>
	<h1>Agendas</h1>
		<?php while($agenda = $resultado->fetch_assoc()){
			echo "<div class='img-block'> <img width='300' height='200' class='img' src='/begbin/img/agendas/" . $agenda['foto'] . "'/></br>";
		?>
			
			 <center><a class='btn btn-danger' href="/begbin/paginas/produtos/email.php?id=<?php echo $agenda['idProduto'];?>"> Requisitar </a></center>
			 <center><a class='btn' href="/begbin/paginas/produtos/produto.php?id=<?php echo $agenda['idProduto'];?>"> Ver </a></center>
			</div>
			<?php } ?>
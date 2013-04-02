<?php 
	require_once "../class/conexao.class.php";
$id = $_GET['id'];
	$conexao = new Conexao();
	$sql = "SELECT * FROM produtos WHERE idProduto = {$id};";
	$resultado = $conexao->executar($sql);



	 while($produto = $resultado->fetch_assoc()){

?>

<!DOCTYPE html>
<html class="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Produto - <?php echo $produto['nome'] ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/begbin/css/normalize.min.css">
        <link rel="stylesheet" href="/begbin/css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body class="back">

		<?php $idCategoria = $produto['idCategoria']; ?>
    	<h4><a href='/begbin/index.php?pagina=<?php 
    					if ($idCategoria == 1){
							echo 'agendas';
						} elseif($idCategoria == 2){
							echo 'cadernos';
						} elseif($idCategoria == 3){
							echo 'camisetas';
						} elseif($idCategoria == 4){
							echo 'canecas';
						} elseif($idCategoria == 5){
							echo 'capas-iphone';
						} elseif($idCategoria == 6){
							echo 'chaveiros';
						} elseif($idCategoria == 7){
							echo 'pota-cds';
						} elseif($idCategoria == 8){
							echo 'toalhas';
						} else {
							echo 'nada';
						} ?>' />Voltar</a></h4>
<h3>Produto: </h3><h1><?php echo $produto['nome'] ?></h1>

	<table class="table table-hover" border='1px'>
			  <tr>
			  	<th>Foto</th>
				<th>Codigo</th>
				<th>Produto</th>
				<th>IdCategoria</th>
				<th>Preço</th>
				<th>Descrição</th>
			</tr>

			<tr>
				<td><?php echo "<img width='500px' height='500px' src='/begbin/img/";
					 if ($idCategoria == 1){
							echo 'agendas/';
						} elseif($idCategoria == 2){
							echo 'cadernos/';
						} elseif($idCategoria == 3){
							echo 'camisetas/';
						} elseif($idCategoria == 4){
							echo 'canecas/';
						} elseif($idCategoria == 5){
							echo 'capas-iphone/';
						} elseif($idCategoria == 6){
							echo 'chaveiros/';
						} elseif($idCategoria == 7){
							echo 'pota-cds/';
						} elseif($idCategoria == 8){
							echo 'toalhas/';
						} else {
							echo 'nada';
						}

				echo $produto["foto"] . "'/>";
				
				//echo "<br/><br/> <img src='/begbin/img/agendas/" . $produto['foto'] . "'/>";
				?></td>
				<td><?php echo $produto["idProduto"];?></td>
				<td><?php echo $produto["nome"];?></td>
				<td><?php echo $produto["idCategoria"];?></td>
				<td><?php echo $produto["preco"];?></td>
				<td><?php echo $produto["descricao"];?></td>
			</tr>
	<?php } ?>

		</table>
	</body>
</html>
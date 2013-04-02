<?php
	
	require_once '../verifica.php';
	require_once '../class/conexao.class.php';


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

	if($usuario = $resultado->fetch_assoc()) {
?>

!DOCTYPE html>
<html class="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Produto - <?php echo $usuario['nome'] ?></title>
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

	
            <h1>Editar Usuário</h1>
			<?php  ?>
						
				<form action="editaForm.php" method="post">
					<fieldset>
						<legend>
						Editar Usuário #<?php echo $usuario['nome'];?>
						</legend>
						
						<input type="hidden" name="id" value="<?php echo $usuario['id'];?>">
						 
						<p><label>Nome: </label>
						<input type="text" name="nome" value="<?php echo $usuario['nome'];?>"> </p>
						
						<p><label>Sobrenome: </label>
						<input type="text" name="sobrenome" value="<?php echo $usuario['sobrenome'];?>"> </p>

						<p><label>Endereço: </label>
						<input type="text" name="endereco" value="<?php echo $usuario['endereco'];?>"> </p>

						<p><label>Telefone: </label>
						<input type="text" name="telefone" value="<?php echo $usuario['telefone'];?>"> </p>
						
						<p><label>Usuario </label>
						<input type="text" name="usuario" value="<?php echo $usuario['usuario'];?>"> </p>

						<p><label>RG: </label>
						<input type="text" name="usuario" value="<?php echo $usuario['rg '];?>"> </p>

						<p><label>CPF: </label>
						<input type="text" name="usuario" value="<?php echo $usuario['cpf'];?>"> </p>
						
						<p><label>Senha </label>
						<input type="password" name="senha"> </p>
						

						<p><button class="btn btn-info">Atualizar</button></p>
						
					</fieldset>
				</form>

	<p>
		<a href=""></a>
	</p>

<?php } else { ?>
<p>Usuario não encontrado</p>
<p><a href='index.php'>Voltar para pagina inicial</a></p>
<?php } ?>


	</body>
</html>
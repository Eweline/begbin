<?php 
$id = $_GET['id'];
	require_once "../class/conexao.class.php";
	$conexao = new Conexao();
	$sql = "SELECT * FROM produtos WHERE idProduto = {$id};";
	$resultado = $conexao->executar($sql);

	$produto = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html class="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/begbin/css/normalize.min.css">
        <link rel="stylesheet" href="/begbin/css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body background='/begbin/img/rock.jpg' class='back'>

<h1>Requisição de produto </h1>

<form class='form' action="emailForm.php" method="post">
			<fieldset>
				<legend></legend>
				<p><input type='hidden' name='idProduto' value='<?php echo $produto['idProduto']; ?>'></p>
				<p><input type="text" name="nome" placeholder="Nome"/></p>
				<p><input type="text" name="email" placeholder="E-mail"/></p>
				<p><textarea cows='15px' rows='7px' name='comentario' placeholder='Comentário'></textarea></p>
				 
				<p><button>Enviar</button></p>

			</fieldset>
		</form>

	</body>
</html>
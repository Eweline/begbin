<?php 
	require_once '../verifica.php';
  	
	require_once '../class/conexao.class.php';
	$conexao = new Conexao();
	$sql = "SELECT * FROM usuarios";
	$resultado = $conexao->executar($sql);


?>
            <h1>Usuários</h1>

          <div class="row-fluid">
          	 <h1>Lista de Usuários</h1>
			<table class="table table-hover">
			  <tr>
				<th>Codigo</th>
				<th>Usuario</th>
				<th>Nome</th>
				<th>Ações</th>
			</tr>
			<?php while($usuario = $resultado->fetch_assoc()){ ?>

			<tr>
				<td><?php echo $usuario["id"];?></td>
				<td><?php echo $usuario["usuario"];?></td>
				<td><?php echo $usuario["nome"];?></td>
				<!-- <td><?php echo $usuario["acesso"];?></td> -->
				<?php if(isset($_SESSION['usuario'])){ ?>
				<td><a class="btn btn-warning" href="editar.php?id=<?php echo $usuario['id'];?>"> Editar </a> </td>
				<td><a class="btn btn-success" href="mostrar.php?id=<?php echo $usuario['id'];?>"> Mostrar Dados </a> </td> 
				<td><a class="btn btn-danger" href="excluir.php?id=<?php echo $usuario['id'];?>" onClick="return confirm('Você tem certeza?');"> Excluir </a> </td>
					<?php } else { ?><td><a class="btn btn-success" href="mostrar.php?id=<?php echo $usuario['id'];?>"> Mostrar Dados </a> </td> <?php }?>
			</tr>
	<?php } ?>

		</table>
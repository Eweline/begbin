<?php
  $titulo = "Admin - Adicionar Produto";
  include_once "../includes/head.php";
  include_once "../includes/menu.php";

	require_once '../restringir-acesso.php';

?>


	<div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Menu Lateral</li>
              <li><a href='index.php'>Produtos</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
          	<h1>Adicionar Produto</h1>
            
            <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
          </div>
          <div class="row-fluid">
          			<form action="adicionarForm.php" method="post">
			<fieldset>
				<legend></legend>

        <input type="text" name="id" placeholder="ID"/></br>
				<input type="text" name="nome" placeholder="Produto"/></br>
				<input type="text" name="preco" placeholder="Preço"/></br>

        <input type="text" name="foto" placeholder="Imagem"/></br>
        <input type="text" name="quant" placeholder="Quantidade"/></br>


				<p><label>Categoria</label>
				<select name="categoria"> 
					<option value="1">Agenda</option>
					<option value="2">Caderno</option>
					<option value="3">Camiseta</option>
          <option value="4">Caneca</option>
          <option value="5">Capa para Iphone</option>
          <option value="6">Chaveiro</option>
          <option value="7">Porta CD</option>
          <option value="8">Toalha</option>
				</select>
				</p>




        <textarea rows='7' cows='10' name="descricao" placeholder="Descrição"></textarea>

				<p><button class="btn btn-info">Adicionar</button></p>

			</fieldset>
		</form>
		

    		<p>
				<a href="/form/usuarios/index.php">&laquo; Voltar</a>
			</p>
			
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
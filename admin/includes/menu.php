
  		<div class="navbar navbar-inverse navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container-fluid">
	          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </a>
	          <a class="brand" href="#">COISAS!</a>
	          <div class="nav-collapse collapse">
	            <p class="navbar-text pull-right">
	              Logged in as <?php 
	              	session_start();
	              	if(!isset($_SESSION['usuario'])){
	              		echo "<a href='/begbin/admin/index.php'>Entrar</a>";
	              	} else{
	              		echo $_SESSION['usuario'] . "   / ";
	              		echo "<a href='/begbin/admin/logout.php'>Sair</a>";
	              	}
	              	
	               ?>
	            </p>
	            <ul class="nav">
	              <li class="active"><a href="/begbin/admin/index.php">Home</a></li>
	              <li><a href="/begbin/admin/produtos/index.php">Produtos</a></li>
	              <li><a href="/begbin/admin/categorias/index.php">Categorias</a></li>
	            </ul>
	          </div><!--/.nav-collapse -->
	        </div>
	      </div>
	    </div>
	
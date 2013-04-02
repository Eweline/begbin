<?php 
  $titulo = "Página Principal";
  include_once "includes/head.php";
  include_once "includes/menu.php";
?>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Menu Lateral</li>
              <li><a href="produtos/index.php">Lista de Produtos</a></li>
              <li><a href="categorias/index.php">Lista de Categorias</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>COISAS! <small>=O</small></h1>
            <H3> Página principal xente!</h3>
            
            <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
          </div>
          <?php if(!isset($_SESSION['usuario'])){ ?>
          <div class="row-fluid">
                    <form action="/begbin/admin/login.php" method="post">
                        <fieldset>
                            <legend>Login</legend>
                            <input type="text" name="usuario" placeholder="Usuário" /><br/>
                            <input type="password" name="senha" placeholder="Senha"/></ins>
                            <p><button class="btn btn-primary">Fazer Login</button></p>
                        </fieldset>
                    </form>
          <?php } else echo "<h3>Bem Vindo</h3> <h2>" . $_SESSION['usuario'] . "</h2>"; ?>

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
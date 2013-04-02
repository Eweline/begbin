<?php require_once 'verifica.php'; ?>
<!DOCTYPE html>
<html class="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php  
            if(isset($_GET["pagina"])){
                switch ($_GET["pagina"]) {
                    // comparar
                    //menu principal
                    case 'a-empresa':
                        echo "BEGbIN - A Empresa";
                    break;

                     case 'seguranca':
                            echo "BEGbIN - Segurança ";
                            break;

                     case 'fale-conosco':
                        echo "BEGbIN -Fale Conosco";
                            break;

                            //menu cliente
                        case 'cadastro':
                            echo "BEGbIN - Cadastro";
                            break;

                        case 'como-comprar':
                            echo "BEGbIN - Como Comprar";
                            break;

                        case 'meus-pedidos':
                            echo "BEGbIN - Meus Pedidos";
                            break;

                        case 'meu-carrinho':
                            echo "BEGbIN - Meu Carrinho";
                            break;

                            // menu produtos
                        case 'agendas':
                            echo "BEGbIN - Agendas";
                            break;

                        case 'cadernos':
                            echo "BEGbIN - Cadernos";
                            break;

                        case 'camisetas':
                            echo "BEGbIN - Camisetas";
                            break;

                        case 'caneca':
                            echo "BEGbIN - Canecas";
                            break;

                        case 'capas-iphone':
                            echo "BEGbIN - Capas para Iphone";
                            break;

                        case 'chaveiros':
                           echo "BEGbIN - Chaveiros";
                            break;

                        case 'porta-cds':
                           echo "BEGbIN - Porta-CDs";
                            break;

                        case 'toalhas':
                            echo "BEGbIN - Toalhas";
                            break;

                    default:
                        echo "BEGbIN - Página Principal";
                        break;
                    } // fecha o switch

                // não possui parametro pagina
                } else {
                    echo "BEGbIN - Página Principal";
                } 



            ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">Você está usando um navegador desatualizado. <a href="http://browsehappy.com/">Atualize o seu navegador hoje </a> ou <a href="http://www.google.com/chromeframe/?redirect=true">instale o Google Chrome Frame </a> para uma melhor experiência neste site.</p>
        <![enif]-->





       <div class="cabecalho">

            <div>
                <nav>
                    <a class="menu-empresa" href="?pagina=cadastro">Cadastro</a>
                    <a class="menu-empresa"  href="?pagina=como-comprar">Como Comprar</a>
                    <a class="menu-empresa" href="?pagina=meus-pedidos">Meus Pedidos</a>
                </nav>
            </div> <!-- fecha div menu clientes -->

            
            <div class="entrada"><?php if (!isset($_SESSION['usuario'])){ ?>
                <form action="/begbin/login.php" method="post">
                    <fieldset>
                        <legend></legend>
                        <input type="text" class="input" name="usuario" placeholder="Usuário" />
                        <input type="password" class="input" name="senha" placeholder="Senha"/>
                        <button class="btn btn-primary">Fazer Login</button>
                    </fieldset>
                </form>
                <?php } else {
                    echo "<p class='back1'>Usuario" . $_SESSION['usuario']; ?>
                    <a href='logout.php'>Sair</a> / <a href="?pagina=editar"> Editar </a>
                    <!-- <a href="usuarios/editar.php?id=<?php //echo $_SESSION["id"]; ?>"> Editar </a> -->
               <?php } ?>
            </div> <!-- fecha div de login class propaganda -->

             <div class="banner">
                <img whidth='200px' height='175px' src="img/ban2.jpg">         
            </div> <!-- fecha div propagandas -->

            <div class="menu-princ">
                    <nav>
                        <a class="menu-empresa" href="?">Inicio</a>
                        <a class="menu-empresa" href="?pagina=a-empresa">A Empresa</a>
                        <a class="menu-empresa" href="?pagina=seguranca">Segurança</a>
                        <a class="menu-empresa" href="?pagina=fale-conosco">Fale Conosco</a>
                    </nav>
             </div> <!-- fecha a div do menu principal -->
        </div> <!-- cabecalho -->    


        <div>
            <div class="menu-produtos">
                <nav>
                    <a class="item-menu" href="?pagina=agendas">Agendas</a>
                    <a class="item-menu" href="?pagina=cadernos">Cadernos</a>
                    <a class="item-menu" href="?pagina=camisetas">Camisetas</a>  
                    <a class="item-menu" href="?pagina=caneca">Canecas</a>  
                    <a class="item-menu" href="?pagina=capas-iphone">Capas pa Iphone</a>
                    <a class="item-menu" href="?pagina=chaveiros">Chaveiros</a>
                    <a class="item-menu" href="?pagina=porta-cds">Porta CDs</a>
                    <a class="item-menu" href="?pagina=toalhas">Toalhas</a>
                </nav>
        </div>


        <!-- </aside> -->
        <div class="conteudo">

            <!-- conteúdos das páginas -->

            <?php

                // existe o parâmetro página?
                if(isset($_GET["pagina"])){

                    // pegar o valor do parâmetro 
                    switch ($_GET["pagina"]) {
                        // comparar
                            //menu principal
                        case 'a-empresa':
                            // incluir a pagina correspondente
                            include "paginas/a-empresa.php";
                            break;

                        case 'seguranca':
                            include "paginas/seguranca.php";
                            break;

                        case 'fale-conosco':
                            include "paginas/fale-conosco.php";
                            break;

                            //menu cliente
                        case 'cadastro':
                            include "usuarios/adicionar.php";
                            break;

                        case 'como-comprar':
                            include "paginas/como-comprar.php";
                            break;

                        case 'meus-pedidos':
                            include "paginas/meus_pedidos.php";
                            break;

                            // menu produtos
                        case 'agendas':
                            include "paginas/produtos/agendas.php";
                            break;

                        case 'cadernos':
                            include "paginas/produtos/cadernos.php";
                            break;

                        case 'camisetas':
                            include "paginas/produtos/camisetas.php";
                            break;

                        case 'caneca':
                            include "paginas/produtos/caneca.php";
                            break;

                        case 'capas-iphone':
                            include "paginas/produtos/capas-iphone.php";
                            break;

                        case 'chaveiros':
                            include "paginas/produtos/chaveiros.php";
                            break;

                        case 'porta-cds':
                            include "paginas/produtos/porta-cds.php";
                            break;

                        case 'toalhas':
                            include "paginas/produtos/toalhas.php";
                            break;


                        // usuario
                            case 'editar':
                            include "usuarios/editar.php?id=";
                            echo $_SESSION['id'];
                            break;


                    default:
                        header("location: 404.html");
                        break;
                    } // fecha o switch

                // não possui parametro pagina
                } else {
                    include "paginas/home.php";
                }

            ?>

        </div> <!-- div conteudo --> 
        </div> <!-- fecha centro -->      


    <!-- fecha a div container -->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

    </body>
</html>
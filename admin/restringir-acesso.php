<?php
	$titulo = "Acesso Restrito";
 	include_once "includes/head.php";
	include_once "includes/menu.php";
//iniciar a session
//session_start();

	echo "<h1><red>Acesso Restrito</red></h1>";

// verificar, se NÃO exstir a info do usuário na session
// mostrar uma mensagem de erro de acesso
	if(!isset($_SESSION['usuario'])) {
		echo "Acesso restrito! Saia daqui!";
		echo "<br/><a href='/begbin/admin/index.php'>Voltar para a Pagina Principal</a>";
		exit();
	}
	
	echo "</body></html>";
?>
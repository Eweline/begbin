<?php
//iniciar a session
//session_start();


// verificar, se NÃO exstir a info do usuário na session
// mostrar uma mensagem de erro de acesso
	if(!isset($_SESSION['usuario'])) {
		echo "Acesso restrito! Saia daqui!";
		echo "<br/><a href='/begbin/index.php'>Voltar para a Pagina Principal</a>";
		exit();
	}
?>
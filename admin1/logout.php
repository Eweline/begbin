<?php

include_once 'verifica.php';

if ($_POST['deslogar'] == 'sim'){
	session_start();
	session_destroy();
	session_unset();
	header("Location:index.php"); 
}

?>
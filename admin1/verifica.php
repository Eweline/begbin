<?php

session_start();

if(empty($_SESSION["usuariologin"]) || empty($_SESSION["usuariosenha"]) || empty($_SESSION["usuarionome"])) {
	header("Location:index.php");
}

?>
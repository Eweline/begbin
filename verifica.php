<?php

session_start();
if(isset($_SESSION["usuario"])){
if(empty($_SESSION["usuario"]) || empty($_SESSION["senha"])) {
	header("Location:index.php");
}
}
?>

<!-- || !empty($_SESSION['id']) -->
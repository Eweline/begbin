<?php
//terminar a session
session_start();

//desativa as info da session do usuario
unset($_SESSION['usuario']);

//destruir a sessão
session_destroy();


// redirecionar para a página de login
header("Location:index.php");
?>
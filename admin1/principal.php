<?php include_once 'verifica.php'; ?>

<form name="logoff" id="logoff" method="post" action="logout.php" enctype="multipart/form-data">
	<input type="hidden" value="sim" name="deslogar" id="deslogar" />
	<input type="submit" value="Logoff">
</form>

<?php

echo "Login efetuado com sucesso! </br> Bem vindo senhor " . $_SESSION['usuarionome'];

?>
<!--<?php

	//require_once '../restringir-acesso.php';

?> -->


    <h1>Adicionar Usuário</h1>   
    
    <form class='form' action="/begbin/usuarios/adicionarForm.php" method="post">
			<fieldset>
				<legend></legend>

				<p><input type="text" name="nome" placeholder="Nome"/></p>
				<p><input type="text" name="sobrenome" placeholder="Sobrenome"/></p>
				<p><input type="text" name="endereco" placeholder="Endereço"/></p>
				<p><input type="text" name="rg" placeholder="RG"/></p>
				<p><input type="text" name="cpf" placeholder="CPF"/></p>
				<p><input type="text" name="telefone" placeholder="Telefone"/></p>

				<p><input type="text" name="usuario" placeholder="Usuário"/>
				<small>(insira somente letras minúsculas e mais de 3 caracteres)</small></p>

				<p><input type="password" name="senha" placeholder="Senha"/> </p>

				<p><button>Adicionar</button></p>

			</fieldset>
		</form>
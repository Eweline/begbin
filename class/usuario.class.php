<?php

class Usuario{
	private $id;
	private $nome;
	private $sobrenome;
	private $endereco;
	private $telefone;
	private $usuario;
	private $senha;
	private $rg;
	private $cpf;

	public function __set($atb, $valor){
		$this->$atb = $valor;
	}

	public function __get($valor){
		return $this->$valor;
	}


	/*public function validaEmail(){
		// verificar se o usuário possui mais de três (>3) caracteres e TEM que ser somente letras, deve ser minúsculo e não deve ter espaços
		if(!preg_match("/^[a-z]{3,}/",$this->usuario)){
			echo "<div class='alert alert-error'>";
			echo htmlentities("Usuário inválido");
			echo "</div>";
			exit();
		}
	}*/


	public function validaSenha(){

		// verificar se a senha possui mais de 3 caracteres
		if(!preg_match("/^[a-zA-Z0-9]{3,}/", $this->senha)){
			echo "Senha deve possuir mais que 3 caracteres";
			exit();
		}
	}


}

?>

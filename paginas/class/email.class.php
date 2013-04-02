<?php

class Email{
	private $id;
	private $idProduto;
	private $nome;
	private $email;
	private $comentario;
	
	public function __set($atb, $valor){
		$this->$atb = $valor;
	}

	public function __get($valor){
		return $this->$valor;
	}


	public function validaEmail(){
		// verificar se o usuário possui mais de três (>3) caracteres e TEM que ser somente letras, deve ser minúsculo e não deve ter espaços
		if(!preg_match("/^[a-z]{3,}/",$this->usuario)){
			echo "<div class='alert alert-error'>";
			echo htmlentities("Usuário inválido");
			echo "</div>";
			exit();
		}
	}



}

?>

<?php

class Contato{
	private $id;
	private $nome;
	private $email;
	private $mensagem;
	
	public function __set($atb, $valor){
		$this->$atb = $valor;
	}

	public function __get($valor){
		return $this->$valor;
	}


	
}
?>
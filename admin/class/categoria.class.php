<?php

class Categoria{
	private $id;
	private $categoria;

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}

	public function __get($valor){
		return $this->$valor;
	}

}

?>
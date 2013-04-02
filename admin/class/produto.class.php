<?php

class Produto{
	private $id;
	private $idCategoria;
	private $nome;
	private $preco;
	private $descricao;
	private $foto;
	private $quant;

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}

	public function __get($valor){
		return $this->$valor;
	}

}

?>
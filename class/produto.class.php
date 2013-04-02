<?php

class Produto{
	private $id;
	private $idCategoria;
	private $pro_nome;
	private $pro_preco;
	private $pro_descricao;

	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}

	public function __get($valor){
		return $this->$valor;
	}

}

?>
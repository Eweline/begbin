<?php

class Conexao {
	private $endereco  = "localhost";
	private $usuario   = "root";
	private $senha	   = "";
	private $baseDados = "begbin";

	private $conexao;

	// abrir conexao
	public function abrir(){
		/*
			conectar com o banco
			passando o valor dos atributos
		 	como parametro
		*/
		$this->conexao = new mysqli(
							$this->endereco,
							$this->usuario,
							$this->senha,
							$this->baseDados
						);

		if ($this->conexao->connect_errno) {
    		echo "Falhou ao conectar ao MySQL: (".
    				$this->conexao->connect_errno.") ". 
					$this->conexao->connect_error;
    		exit;
		}

		$this->conexao->set_charset('UTF8');
	}

	//fechar conexao
	public function fechar(){
		$this->conexao->close();
	}

	//consulta
	public function executar($sql){
		$this->abrir();

		$retorno = $this->conexao->query($sql);

		if (!$retorno) {
			print_r($this->conexao->error);
		}

		$this->fechar();

		return $retorno;
	}


}

?>
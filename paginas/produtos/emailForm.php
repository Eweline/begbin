<?php
 echo "<!DOCTYPE html><html> <head> <meta charset='utf-8'><link rel='stylesheet' href='/begbin/css/main.css'></head> <body background='/begbin/img/rock.jpg' class='back'> ";

	//require_once 'restringir-acesso.php';
	require_once '../class/conexao.class.php';
	require_once '../class/email.class.php';



	$email1 = new Email();
	$conexao = new Conexao();
		
		//pegando os valores da form e atriubindo variáveis
		$email1->idProduto = (int) $_POST['idProduto'];
		$email1->nome = $_POST['nome'];
		$email1->email = $_POST['email'];
		$email1->comentario = $_POST['comentario'];


		$sqlInserir = "INSERT INTO emails (idProduto, nome, email, comentario) VALUES ({$email1->idProduto}, '{$email1->nome}', '{$email1->email}', '{$email1->comentario}');";

		if($resultado = $conexao->executar($sqlInserir)){
			echo "Email enviado com sucesso!";
			echo "</br><a href='/begbin/index.php'>Voltar para página inicial </a>";
		} else {
			echo "A requisição não deu certo. Por favor, tente outra vez.";
		}

		echo "</body> </html>";

?>
<?php
	$nome 		= $_POST["nome"];
	$telefone 	= $_POST["telefone"];


	include "conexao.php";
	//$conn = new mysqli("mysql857.umbler.com", "user_test_bd", "obscure1", "neura_bd_teste", "41890");
	
	$sql = "INSERT INTO Cliente (nome,email) VALUES (?, ?)";
	$stm = $conn->prepare($sql);
	$stm->bind_param("ss", $nome, $telefone);

	if ($stm->execute()){
		$retorno = array("retorno" => "YES");
	} else {
		$retorno = array("retorno" => "NO");
	}

	echo json_encode($retorno);

	$stm->close();
	$conn->close();
?>
<?php
	$nome 		= $_POST["nome"];
	$telefone 	= $_POST["telefone"];

	/*Parâmetros ¶

	1° HOST
	2°USERNAME
	3°PASSWD
	4°DBNAME
	5°PORT
	6°SOCKET

    Specifies the socket or named pipe that should be used. */
	
	$conn = new mysqli("mysql857.umbler.com", "user_test_bd", "obscure1", "neura_bd_teste", "41890");
	
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
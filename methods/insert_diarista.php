<?php
	include "conexao.php";
	
	$data = date("Y-m-d H:i:s");
	$nome = $_POST["nome"];
	$contato1 = $_POST["contato"];
	$contato2 = $_POST["contato2"];
	$idade = $_POST["idade"];
	
	$sql_verifica = 'SELECT contato1 FROM Diaristas WHERE contato1 = "'.$contato1.'" ';
	
	$exec_row = $conn->query($sql_verifica);
	
	if($exec_row->num_rows == 0){
		$sql_insert = 'INSERT INTO Diaristas (nome, contato1, contato2, idade, dataCadastro) ';
		$sql_insert .= ' VALUES (?, ?, ?, ?, ?)';

		
		$stm = $conn->prepare($sql_insert);
		$stm->bind_param("sssss", $nome, $contato1, $contato2, $idade, $data);
		
		if ($stm->execute()){
			$retorno = array("retorno" => "YES");
			$stm->close();
		} else {
			$retorno = array("retorno" => "NO");
		}
		
	}else{
		$retorno = array("retorno" => 'EMAIL_ERROR');
	}
	
	echo json_encode($retorno);
	$conn->close();

?>
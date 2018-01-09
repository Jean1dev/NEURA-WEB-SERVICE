<?php

	include "conexao.php";
	
	$data = date("Y-m-d H:i:s");
	$info = $_POST["info"];
	$qtd = $_POST["qtd"];

	$sql_insert = 'INSERT INTO DietaInfo (data, info, qtd) ';
	$sql_insert .= ' VALUES (?, ?, ?)';
	
	$stm = $conn->prepare($sql_insert);
	$stm->bind_param("sss", $data, $info, $qtd);
	
	if ($stm->execute()){
		$retorno = array("retorno" => "YES");
		$stm->close();
	} else {
		$retorno = array("retorno" => "NO");
	}
	
	echo json_encode($retorno);
	$conn->close();

?>
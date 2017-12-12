<?php 

	include "db.php";
	
	$retorno;
	
	$sql = "SELECT * FROM `Valor` ORDER BY _id DESC LIMIT 1";
	$exec_row = $conn->query($sql);
	
	$retorno = $exec_row->fetch_row();
	$retorno_row = $retorno[1];
	
	echo json_encode($retorno_row);
	
	$conn->close();
?>
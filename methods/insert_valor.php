<?php 

	include "db.php"
	
	$mValor = $_POST["valor"];
	$pValor = 0;
	
	$sql_insert = "INSERT INTO Valor(mValor, pValor) VALUES(?, ?)";
	
	$stm = $conn->prepare($sql_insert);
	$stm->bind_param("ss", $mValor, $pValor);
	
	if($stm->execute()){
		$retorno = array("retorno" => 'YES');
	}else{
		$retorno = array("retorno" => 'NO');
	}

	$stm->close();
	$conn->close();
	echo json_encode($retorno);

?>
<?php 

	include "db.php";
	
	$mValor = $_POST["valor"];
	$pValor = 0;
	
	$sql_insert = "INSERT INTO Valor(mValor, pValor) VALUES(?, ?)";
	
	$stm = $conn->prepare($sql_insert);
	$stm->bind_param("ss", $mValor, $pValor);
	
	if($stm->execute()){
		$retorno = array("retorno" => 'YES');
		$msg = "teste de envio de email";
		$msg = wordwrap($msg, 70);
		mail("jeanlucafp@gmail.com", "teste", $msg);
	}else{
		$retorno = array("retorno" => 'NO');
	}

	$stm->close();
	$conn->close();
	echo json_encode($retorno);

?>
<?php 

	include "db.php";
	
	$mValor = $_POST["valor"];
	$pValor = 0;
	$data = date("Y-m-d H:i:s");
	
	$sql_insert = "INSERT INTO Valor(mValor, pValor) VALUES(?, ?)";
	
	$stm = $conn->prepare($sql_insert);
	$stm->bind_param("ss", $mValor, $pValor);
	
	if($stm->execute()){
		$retorno = array("retorno" => 'YES');
		$msg = "Email enviado via smartphone android, valor do metodo post :".$mValor." - ".$data;
		$msg = wordwrap($msg, 70);
		$err = mail("jeanlucafp@gmail.com", "ENVIADO VIA GAEA ENERGY", $msg);

	}else{
		$retorno = array("retorno" => 'NO');
	}

	$stm->close();
	$conn->close();
	echo json_encode($retorno);

?>
<?php
	$nome = $_POST["nome"];
	$contato = $_POST["telefone"];
	
	$array = array("nome" => .$nome., "telefone" => .$contato);
	
	echo $array;
	
	/*$json = json_encode($array);
	
	$ch = curl_init('https://neuraapp.com/leads');
	
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(

    'Content-Type: application/json',

    'Content-Length: ' . strlen($json))*/

);

?>
	
	
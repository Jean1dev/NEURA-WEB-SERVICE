<?php
	$nome = $_POST["nome"];
	$contato = $_POST["telefone"];
	
	//$array = array("nome" => .$nome., "telefone" => .$contato);
	
	//$data = "{nome :".$nome.", telefone :".$contato."}";
	$data = array(
					nome 		=> $nome,
					telefone 	=> $contato,
				);
	
	$data_string = json_encode($data);                                                                                   
 
	$ch = curl_init('http://neuraapp.com/leads');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json',
		'Content-Length: ' . strlen($data_string))
	);                                                                                                                   
 
$result = curl_exec($ch);
	
	/*$json = json_encode($array);
	
	$ch = curl_init('https://neuraapp.com/leads');
	
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(

    'Content-Type: application/json',

    'Content-Length: ' . strlen($json))

);*/

?>
	
	
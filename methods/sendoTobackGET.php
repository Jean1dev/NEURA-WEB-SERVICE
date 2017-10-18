
<?php
 
 $nome     = 	$_GET["nome"];
 $telefone = 	$_GET["telefone"];
 
//API Url

 
//The JSON data.
$data = array(
					nome 		=> $nome,
					telefone 	=> $telefone,
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
	echo json_encode($result);

 /*
 $nome     = 	$_GET['nome'];
 $telefone = 	$_GET['telefone'];
 
//API Url
$url = 'http://http://neuraapp.com//leads';
 
//Initiate cURL.
$ch = curl_init($url);
 
//The JSON data.
$jsonData = array(
    'nome' 	   => 	$nome,
    'telefone' => 	$telefone
);
 
 
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
 
//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);
 
//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
 
//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
 
//Execute the request
$result = curl_exec($ch);*/
?>
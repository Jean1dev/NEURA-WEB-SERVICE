
<?php
 
 $nome     		= 	$_GET["nome"];
 $telefone 		= 	$_GET["telefone"];
 $emailenviar 	= 	"jeanlucafp@gmail.com";
 $destino 		= 	$emailenviar;
 $assunto 		= 	"Enviados via mobile";
 


 
//The JSON data.
	$data = array(
					nome 		=> $nome,
					telefone 	=> $telefone,
				);
	
	$data_string = json_encode($data);                                                                                   
	
	//API Url
	$ch = curl_init('http://neuraapp.com/leads');
	
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json',
		'Content-Length: ' . strlen($data_string))
	);      
	
//CORPO EMAIL

	  $arquivo = "
	  <style type='text/css'>
	  body {
	  margin:0px;
	  font-family:Verdane;
	  font-size:12px;
	  color: #666666;
	  }
	  a{
	  color: #666666;
	  text-decoration: none;
	  }
	  a:hover {
	  color: #FF0000;
	  text-decoration: none;
	  }
	  </style>
		<html>
			<table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
				<tr>
				  <td>
	  <tr>
					 <td width='500'>Nome:$nome</td>
					</tr>
					<tr>
					  <td width='320'>E-mail:<b>$telefone</b></td>
		 </tr>
			</table>
		</html>
	  ";

//SEND EMAIL

	  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
	  $headers .= "Bcc: $EmailPadrao\r\n";	
  
	  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
	  
	  if($enviaremail){
		  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
		  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
	} else {
		  $mgm = "ERRO AO ENVIAR E-MAIL!";
		  echo $mgm;
	  }
 
	$result = curl_exec($ch);
	echo json_encode($result);


?>
<?php
	try{
		$conn = new mysqli("mysql857.umbler.com", "user_test_bd", "obscure1", "neura_bd_teste", "41890");
	}catch(PDOExeception $e){
		echo "Não foi possivel conectar ao banco de dados</br>";
		echo"Erro:".$e>getmessege();
		die();
	}
?>
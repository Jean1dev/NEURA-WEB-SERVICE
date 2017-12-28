<?php
	try{
			/*Parâmetros ¶

			1° HOST
			2°USERNAME
			3°PASSWD
			4°DBNAME
			5°PORT
			6°SOCKET

			Specifies the socket or named pipe that should be used. */
		$conn = new mysqli("mysql857.umbler.com", "user_test_bd", "obscure1", "neura_bd_teste", "41890");
	}catch(PDOExeception $e){
		echo "Não foi possivel conectar ao banco de dados</br>";
		//echo"Erro:".$e>getmessege();
		die();
	}
?>
<?php 

	include "db.php";
	mysql_select_db('neura_bd_teste');

	$create_table = "CREATE TABLE IF NOT EXISTS `turnos` (
							`Id_Turnos` int(11) NOT NULL,
							`Turnos` varchar(40) NOT NULL
						) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;"

	$create = "CREATE TABLE minhatabela (
				primeira_coluna int NOT NULL auto_increment,
				segunda_coluna varchar (20) NOT NULL,
				terceira_coluna int NOT NULL,
				PRIMARY KEY (primeira_coluna)
				)";
						
	$results = mysql_query($create) or die (mysql_error());
	//$stm = $scon->prepare($create_table);
	
	if($results > 0){
		echo "SUCCES";
	}else{
		echo "ERR";
	}
	
	$stm->close();
	$con->close();
		
?>
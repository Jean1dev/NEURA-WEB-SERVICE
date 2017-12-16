<?php 

	include "db.php";
	
	$create_table = "CREATE TABLE IF NOT EXISTS `turnos` (
							`Id_Turnos` int(11) NOT NULL,
							`Turnos` varchar(40) NOT NULL
						) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;"
						
	$stm = $scon->prepare($create_table);
	
	if($stm->execute()){
		echo "SUCCES";
	}else{
		echo "ERR";
	}
	
	$stm->close();
	$con->close();
		
?>
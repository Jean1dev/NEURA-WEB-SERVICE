<?php 

	//include "db.php";           // PRODUÇÃO
	include "db_local.php";     // LOCAL

	$version = null ;
	$indice = 1;
	$funcao = 'VERSAO_';

	$table = "CREATE TABLE IF NOT EXISTS `VersaoBD` (
			  `idVersaoBD` INT NOT NULL AUTO_INCREMENT,
			  `date` DATE NULL,
			  PRIMARY KEY (`idVersaoBD`))
			  ENGINE = InnoDB;";

	$stm = $conn->query($table);

	$sql = 'SELECT idVersaoBD FROM VersaoBD ORDER BY idVersaoBD DESC LIMIT 1';
	$exec_row = $conn->query($sql);
	$retorno = $exec_row->fetch_row();
	$retorno_row = $retorno[1];

	if($retorno[1] > $indice){
		$indice = $retorno[1];
	}

	for($i = 0; $i < 9999; $i++){
		try {
			eval()
		} catch (Exception $e) {
			
		}
	}
?>
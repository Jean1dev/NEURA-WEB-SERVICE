<?php 

	include "db.php";

	$version = null ;

	$table = "CREATE TABLE IF NOT EXISTS `VersaoBD` (
				  `idVersaoBD` INT NOT NULL AUTO_INCREMENT,
				  `date` DATE NULL,
				  PRIMARY KEY (`idVersaoBD`))
				ENGINE = InnoDB;";					

	$stm = $conn->query($table);
	
	$sql = 'SELECT idVersaoBD FROM VersaoBD ORDER BY idVersaoBD DESC LIMIT 1'
	$exec_row = $conn->query($sql);
	$retorno = $exec_row->fetch_row();
	$retorno_row = $retorno[1];
	
	if($retorno[1] < This.getVersion()){
		This.versaoBD()
	}

	$stm->close();
	$conn->close();
	
	function getVersion(){
		$version = 2;
		return $version;
	}

	function versaoBD(){
		$versao_1 = "CREATE TABLE minhatabela (
					primeira_coluna int NOT NULL auto_increment,
					segunda_coluna varchar (20) NOT NULL,
					terceira_coluna int NOT NULL,
					PRIMARY KEY (primeira_coluna)
					)";
		$stm = $conn->query($versao_1);

	}

	function insertVersionBD(){
		$data = date("Y-m-d H:i:s");
		$sql_insert = 'INSERT INTO VersaoBD(date) VALUES(?)';
		$stm = $conn->prepare($sql_insert);
		$stm->bind_param("s", $data);

		if($stm->execute()){
			$stm->close();
		}else{
			echo 'Problema ao atualizar versão do banco';
		}
	}

?>
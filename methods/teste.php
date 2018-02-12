<?php
	
	header('Access-Control-Allow-Origin: *');

	$teste = $_POST['teste'];

	echo json_encode($teste);
?>
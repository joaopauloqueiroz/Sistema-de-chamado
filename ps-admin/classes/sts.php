<?php 
require_once('../../classes/Usuario.php');
$user = new Usuario();
	
	$dados = $user->findSts();
	echo json_encode($dados);

?>
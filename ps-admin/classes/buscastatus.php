<?php 
require_once('../../classes/Usuario.php');
$user = new Usuario();
	
	$dados = $user->findAll();
	echo json_encode($dados);

?>
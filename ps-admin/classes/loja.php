<?php 
require_once('../../classes/Usuario.php');
$user = new Usuario();
	
	$dados = $user->findLoja();
	echo json_encode($dados);

?>
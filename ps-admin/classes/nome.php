<?php 
require_once('../../classes/Usuario.php');
$user = new Usuario();
	
	$dados = $user->findNome();
	echo json_encode($dados);

?>
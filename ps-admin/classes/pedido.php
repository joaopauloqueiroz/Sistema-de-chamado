<?php 
require_once('../../classes/Usuario.php');
$user = new Usuario();
	
	$dados = $user->findPedido();
	echo json_encode($dados);

?>
<?php 
require_once('../classes/Usuario.php');
$user = new Usuario();

$value = '';
if (!isset($_POST['status'])){}else{$value = $_POST['status'];}
if ($value == 1) {
	$user->setStatus("novo.ico");
	$user->setOrders('1');
	echo "1";
}elseif ($value == 2) {
	$user->setStatus("laranja.ico");
	$user->setOrders('2');
}elseif ($value == 3) {
	$user->setStatus("vermelho.ico");
	$user->setOrders('3');
}else{
	$user->setStatus("novo.ico");
	$user->setOrders('1');
}
	$user->update($_POST['id']);

	header('location: http://start:8090/materiais/ps-admin/')
?>
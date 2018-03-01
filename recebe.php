<?php 
require_once('classes/Usuario.php');

$destino = 'imagens/' . $_FILES['file']['name'];

$arquivo_tmp = $_FILES['file']['tmp_name'];

move_uploaded_file( $arquivo_tmp, $destino);

if ($_FILES['file']['error'] == 0) {

}else{

}

$ch = $_POST['pedido'];
$user = new Usuario();
$user->setPedido($ch);

if (strlen($_POST['quantidade']) <= 0) {
	header('location: http://start:8090/materiais/chamados?erro=erro&cp=quantidade&r=1');exit;
	}else{$user->setQuantidade($_POST['quantidade']);}

$user->setData(date('Y-m-d H:i'));
$user->setDescricao($_POST['descricao']);
$user->setImg($_FILES['file']['name']);
$user->setNome($_POST['nome']);
$user->setLoja($_POST['loja']);
$user->setStatus('Novo');
$user->setOrders('1');
$user->insert();
header('location: http://start:8090/materiais?sucsess=sucess');
?>
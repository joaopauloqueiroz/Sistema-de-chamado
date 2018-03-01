
<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	<?php $erro = ''; if (!isset($_GET['erro'])){}else{$erro = $_GET['erro'];}
	$re = '';
	if (!isset($_GET['r'])){}else{$re = $_GET['r'];}
	?>

	<?php 
	require_once('classes/Usuario.php');
	$user = new Usuario();
	if ($re== 1) {
		
	}else{
		$nome =  $_POST['nome']; $loja = $_POST['loja'];
		if (strlen(trim($nome)) <= 0) {
			header('location: http://start:8090/materiais?erro=nome&&lj='.$loja);exit;
		}else{$user->setNome($nome);}

		if (strlen(trim($loja)) <= 0) {
			header('location: http://start:8090/materiais?erro=loja&&ne='.$nome);exit;
		}else{$user->setLoja($loja);}
	}
	?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.js" type="text/javascript"></script>
	<script src="js/geral.js" type="text/javascript"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/principal.css">
	<link rel="stylesheet" type="text/css" href="css/chamdo-style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width">


</head>

<body>
	<div class="container">
		<div class="col-md-10 group">
			<img src="img/logo-header.png">
		</div>
		<div><h3>Solocitação de Materias</h3></div>
		<div class="form-group error">
			<?php if ($erro == 'erro') {echo "<div class='erro' >Preencha o campo {$_GET['cp']} corretamente</div>";
		}else{} ?>

	</div>
	<div class="form-group pai" >
		<form method="post" action="recebe.php" enctype="multipart/form-data">
			<div class="form-group prod">
				<label for="pedido">Pedido</label>
				<input type="text" id="pedido" class="form-control" name="pedido" placeholder="Pedido">
				
			</div>
			<input type="hidden" name="nome" value=" <?php echo $nome; ?> ">
			<input type="hidden" name="loja" value=" <?php echo $loja; ?> ">
			<div class="form-group quant">
				<label for="quantidade">Quantidade</label>
				<input type="number" id="quantidade" class="form-control" name="quantidade" placeholder="Quantidade">
			</div>
			<div class="form-group">
				<label for="loja">Descrição</label>
				<textarea class="form-control" name="descricao" placeholder="Descrição" cols="10" rows="5"></textarea>
			</div>

			<div class="form-group">
				<label for="file" id="textoImg" class="control-label label-bordered">Adicionar foto</label>
				<label id="data" class="control-label label-bordered">Data: <?php echo date('Y-m-d H:i'); ?></label>
				<div class="form-group nomeArquivo">
				</div>
				
				
				<input class="img" type="file" name="file" id="file" class="inputfile" />
			</div>

			<br>
			<button type="submit" class="btn btn-primary">Solicitar</button>
		</form>
	</div>
</div>
</body>
</html>
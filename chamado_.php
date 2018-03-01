<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	
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

		<div class="form-group pai" >
			<form method="post" action="recebe.php">
			<div class="form-group prod">
				<label for="produto">Produto</label>
				<input type="email" id="produto" class="form-control" name="produto" placeholder="Produto">
			</div>

			<div class="form-group quant">
				<label for="quantidade">Quantidade</label>
				<input type="number" id="quantidade" class="form-control" name="quantidade" placeholder="Quantidade">

			</div>
			<div class="form-group">
				<label for="loja">Descrição</label>
				<textarea class="form-control" name="textarea" placeholder="Descrição" cols="10" rows="10">

				</textarea>
			</div>
			<button type="submit" class="btn btn-primary">Solicitar</button>
			</form>
		</div>
		

		<?php $infos = $user->find($_GET['id']); ?>
			<div class="size">
				<fieldset>
					<legend>Detalhes</legend>
					<strong>Nome:</strong> <?php echo $infos[0]->nome; ?> <br>
					<strong>Loja:</strong> <?php echo $infos[0]->loja; ?><br>
					<strong>Pedido:</strong> <?php echo $infos[0]->pedido; ?><br>
					<strong>Quantidade:</strong> <?php echo $infos[0]->quantidade; ?><br>
					<strong>Data:</strong> <?php echo $infos[0]->data; ?><br>
					<br>
					<strong>Descrição</strong>

					<input type="hidden" id="img" name="" value=" <?php echo $infos[0]->img;?> ">

						
						<div class="form-group imgs" id="imgs">
							<?php echo "<script>img();</script>"?>
						</div>
						<div class="form-group" id="lin">
							
						</div>
					<div class="form-group">
						<div class="desc">
							<?php echo $infos[0]->descricao; ?>
						</div>
						

					</div>

				</fieldset>
			</div>




	</div>
</body>
</html>
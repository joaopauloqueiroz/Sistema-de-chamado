<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	<?php $erro = ''; if (!isset($_GET['erro'])){}else{$erro = $_GET['erro'];}?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/principal.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<div class="container">
		<div></div>
		<div class="col-md-10 group">
			<img src="img/logo-header.png">
		</div>
		<div><h3>Solicitação de Materias</h3></div>

		<div class="col-md-10 pai">
			<div class="size">
				<form action="chamados" method="POST">
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" id="nome" class="form-control" name="nome" placeholder="Nome" 
						value="<?php if (!isset($_GET['ne'])){}else{echo$_GET['ne'];}?>">
						<?php if ($erro == 'nome') {echo "<div class='erro' >Preencha o campo Nome</div>";
						}else{} ?>
					</div>

					<div class="form-group">
						<label for="loja">Loja</label>
						<input type="text" id="nome" class="form-control" name="loja" placeholder="Loja" 
						value="<?php if (!isset($_GET['lj'])){}else{echo $_GET['lj'];} ?>">

						<?php if ($erro == 'loja') {echo "<div class='erro' >Preencha o campo Loja</div>";
						}else{} ?>
					</div>

					<button type="submit" class="btn btn-primary">Proximo</button>
				</form>
				<div class="size">
					<?php $sucesso = '';if(!isset($_GET['sucsess'])){}else{$sucesso = $_GET['sucsess'];}

						if ($sucesso == 'sucess') {
							echo "<br><div class='sucesso'> Chamado enviado com sucesso </div>";
						}

					 ?>

				</div>
			</div>

		</div>

	</div>
</body>
</html>
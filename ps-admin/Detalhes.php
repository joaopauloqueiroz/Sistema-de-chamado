<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	<?php require_once('../classes/Usuario.php'); $user = new Usuario();?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/geral.js" ></script>
	<script type="text/javascript" src="js/lojas.js" ></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/principal.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width">
	<script type="text/javascript">
		function img(){
			var a = document.getElementById('img').value;
			var file = '../imagens/'+a.trim();

			var img = new Image();
			img.src = file;
			img.onload = function() {
				document.getElementById('imgs').innerHTML = "<img src="+file+" width='300px' height='200px'>";
				document.getElementById('lin').innerHTML = "<a class='popup link form-group'>Ver imagem</a>";
				$('.link').attr('href',file);
			}
        //caso a imagem nao exista cloca um valor branco la dentro
        img.onerror = function() {
        	document.getElementById('imgs').innerHTML = "<img src='../imagens/vazio.png' width='300px' height='200px'>";
        	document.getElementById('lin').innerHTML = " ";
        }


    }
</script>
</head>
<body>
	<div class="container">
		
		<div class="col-md-10 group">
			<img src="../img/logo-header.png">
			
		</div>
		<div><h3>Detalhes do pedido</h3></div>
		<div class="pai">
			<?php $infos = $user->find($_GET['id']); ?>
			<input type="hidden" id="img" name="" value=" <?php echo $infos[0]->img;?> ">
			<div class="tudo">
				<div class="menu">
					<fieldset>
						<strong>Nome:</strong> <?php echo $infos[0]->nome; ?> <br>
						<strong>Loja:</strong> <?php echo $infos[0]->loja; ?><br>
						<strong>Pedido:</strong> <?php echo $infos[0]->pedido; ?><br>
						<strong>Quantidade:</strong> <?php echo $infos[0]->quantidade; ?><br>
						<strong>Data:</strong> <?php echo $infos[0]->data; ?><br>
					</fieldset>
				</div>
				<div class="conteudo" id="imgs"> <?php echo "<script>img();</script>"?> </div>
				<div class="form-group" id="lin"></div>
			</div>
			<div>
				<h4>Descrição</h4>
				<div class="desc">
					<?php echo $infos[0]->descricao; ?>
				</div>
			</div>
			<br>
			<form action="status" method="post">
				<input type="hidden" name="id" value=" <?php echo $_GET['id']; ?> ">
				<label class="checkbox-inline"><input type="radio" value="1" name="status"> &nbsp;Aberto</label>&nbsp;&nbsp;&nbsp;&nbsp;
				<label class="checkbox-inline"><input type="radio" value="2" name="status">&nbsp; Em andamento</label> &nbsp;&nbsp;&nbsp;&nbsp;
				<label class="checkbox-inline"><input type="radio" value="3" name="status"> &nbsp;Finalizado</label>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="" class="btn-primary" value="Concluido">
			</form>


		</div>
	</div>
</body>
</html>
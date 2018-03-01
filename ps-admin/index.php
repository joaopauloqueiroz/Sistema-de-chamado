<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	<?php require_once('../classes/Usuario.php'); $user = new Usuario(); $erro = ''; if (!isset($_GET['erro'])){}else{$erro = $_GET['erro'];}?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.js" type="text/javascript"></script>
	<script src="js/ajax.js" type="text/javascript"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/principal.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<div class="container">
		<div></div>
		<div class="col-md-10 group">
			<img src="../img/logo-header.png">

		</div>
		<div><h3>Controle</h3></div>

		<div class="col-md-10 pai">
			<div class="size">
				<table id="fields">
					<!-- fields -->
				</table>
				
			</div>
			
			<div class="footer">
				www.psdovidro.com.br
				<br>
			</div>
				<br>
		</div>
		
	</body>
	</html>
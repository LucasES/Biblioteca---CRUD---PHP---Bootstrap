<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Alterar Livro</title>
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/normalize.css" />
		<style type="text/css" media="screen">
			body {
				background: #34495e;
			}
		</style>
	</head>
	<body>
		<h2 align="center" class="well">Alterar Livro </h2>
		<form class="form-horizontal well span6 offset5" action="index.php" method="POST" >
			<input type="hidden" name="acao" value="altera_processa" />
			<?php
            require_once ('formulario.php');
			?>
		</form>

		<div class="navbar navbar-fixed-bottom  well">
			<p class="alignMiddle">
				Créditos: Lucas Araújo
			</p>
			<p class="alignMiddle">
				Trabalho Desenvolvimento WEB
			</p>
		</div>

	</body>
</html>
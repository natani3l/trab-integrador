<!DOCTYPE php>
<php>
<head>
	<title>Visualizar Chamado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/user/viewOS.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="	stackpatha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>

	
	<div class="main">
		<?php include "../../includes/menu_left.php"; ?>
		<?php include "../../includes/top.php"?>

		<div class="content">
			<form>
				<label for="numero-chamado">Número do Chamado(OS): </label>
				<br><br>

				<label for="empresa-solic">Empresa: </label>
				<br><br>

				<label for="data-abert">Data de abertura: </label>
				<br><br>

				<label for="status-chamado">Status do chamado: </label>
				<br><br>

				<label for="nvl-prioridade">Nível de prioridade: </label>
				<br><br>

				<label for="msg-enviada">Mensagem enviada: </label>
				<br><br>


			</form>
			<a href="overview.php"><input type="button" value="Voltar"></a>
			<a href="#"><input type="button" value="Gerar PDF"></a>
			<a href="#"><input type="button" onclick="imprimeAlerta()" value="Encerrar Chamado"</a>
		</div>


<script src="../../js/view.js"></script>
</body>

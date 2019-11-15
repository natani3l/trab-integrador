<!DOCTYPE html>
<html>
<head>
	<title>Overview</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/adm/cadastro.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="stackpatha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">
		<?php include "../../includes-adm/menu_left.php" ?>

		<div class="top">
			<p>Cadastrar Usuario</p>
		</div>

		<div class="content">
			<form name="form-1" id="form-1">
				<label for="empresa">Empresa</label><br>
				<select name="empresa">
					<option value="sel">Selecione</option>
					<option value="empA">Empresa A</option>
					<option value="empB">Empresa B</option>
					<option value="empC">Empresa C</option>
				</select><br>

				<label for="titulo">CNPJ</label><br>
				<input type="text" placeholder="xx.xxx.xxx/xxxx-xx" autofocus="" id="cnpj" name="cnpj"><br>
				<span class="msg-erro" id="msg-cnpj"></span>

				<label for="titulo">Email</label><br>
				<input type="text" name="email" id="email" placeholder="nome@dominio"><br>
				<span class="msg-erro" id="msg-email"></span>

				<label for="titulo">Login</label><br>
				<input type="text" id="login" name="login"><br>
				<span class="msg-erro" id="msg-login"></span>

				<label for="titulo">Senha</label><br>
				<input type="password" id="password"><br>
				<span class="msg-erro" id="msg-senha"></span>

				<label for="titulo">Confirmar Senha</label><br>
				<input type="password" id="passwordconf"><br>
				<span class="msg-erro" id="msg-senhaConfirma"></span>

				<a href="overview.php"><input type="submit" value="Enviar"></a>
			</form>

		</div>

	</div>

<script src="../../js/cadastro.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Support</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/login/login.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="main">
		<div class="loginBox">
			<img class="img-usuario" src="../../img/user.png">

			<h1>Login de Usuário</h1>

			<form method="post">


			<input id="login" name="login" required="required" type="text" placeholder="Usuário"/>
			<br>

			<input id="senha" name="senha" required="required" type="password" placeholder="Senha"/>
			<br>

			<input type="submit" name="enter" value="LOGIN">
			</form>
			<?php

			include "../../classes/userCadastro.php";

			if (isset($_POST['enter'])){
				$log = new userCadastro();
				$dados = $log->authenticate($_POST['login'], $_POST['senha']);
				if (empty($dados)){
					header("Location: login.php?erro=1");
				}else{
					session_start();
					//header("Location: http://localhost/trab-integrador/programacao-II/html/user/overview.php");
					$_SESSION['nome'] = $dados[0]['nome_client'];
					$_SESSION['cnpj'] = $dados[0]['cnpj_emp'];

					$expira = time() + 60 * 60 * 24 * 7;
					setcookie("Nome", $dados[0]['nome_client'], $expira);
					setcookie("CNPJ", $dados[0]['cnpj_emp'], $expira);

					header("Location: http://localhost/trab-integrador/programacao-II/html/adm/overview.php");

				}
			}
			?>


			<p>
				Esqueceu sua <a href="https://www.google.com.br" target="_blank">senha</a>?
			</p>
		</div>
	</div>

</body>
</html>

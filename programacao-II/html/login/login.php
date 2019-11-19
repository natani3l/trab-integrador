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


			<input id="login" autofocus="" name="login" required="required" type="text" placeholder="Usuário"/>
			<br>

			<input id="senha" name="senha" required="required" type="password" placeholder="Senha"/>
			<br>

			<input type="submit" name="enter" value="LOGIN">
			</form>
			<?php

			include "../../classes/userCadastro.php";

			if (isset($_POST['enter'])) {
				$log = new userCadastro();

				$dados = $log->authenticate($_POST['login'], $_POST['senha']);
				$dadosAdm = $log->authenticateAdm($_POST['login'], $_POST['senha']);

				if ($dados[0]['login_client'] != "") {
					session_start();
					$_SESSION['loginClient'] = $dados[0]['login_client'];
					$_SESSION['nome'] = $dados[0]['nome_client'];
					$_SESSION['cnpj'] = $dados[0]['cnpj_emp'];
					$_SESSION['email'] = $dados[0]['email_client'];
					$_SESSION['autenticado'] = 1;
					header("Location: http://localhost/trab-integrador/programacao-II/html/user/overview.php");

				}elseif ($dadosAdm[0]['login_func'] != "") {
					session_start();

					$_SESSION['nome'] = $dados[0]['nome_func'];
					$_SESSION['loginFunc'] = $dados[0]['login_func'];
					$_SESSION['autenticado'] = 1;

					header("Location: http://localhost/trab-integrador/programacao-II/html/adm/overview.php");

				}else{
				 		header("Location: login.php?erro=1");
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

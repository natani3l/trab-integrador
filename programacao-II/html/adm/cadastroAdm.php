<!DOCTYPE html>
<?php include "../../classes/autenticado.php";?>
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
		<?php
		include "../../includes-adm/menu_left.php";
		include "../../classes/BD.php";
		?>

		<div class="top">
		  <p>Cadastrar novo Administrador</p>
		</div>

    <div class="content">
			<form method="POST" id="form-2">

        <label for="empresa">Setor</label><br>
        <select name="empresa">
          <option value="sel">Selecione</option>
          <option value="empA">Setor A</option>
          <option value="empB">Setor B</option>
          <option value="empC">Setor C</option>
        </select><br>

				<label for="titulo">Nome</label><br>
				<input type="text" id="nome" name="nome"><br>
				<span class="msg-erro" id="msg-nome"></span>

				<label for="titulo">Email</label><br>
				<input type="text" name="email" id="email" placeholder="nome@dominio"><br>
				<span class="msg-erro" id="msg-email"></span>

				<label for="titulo">Login</label><br>
				<input type="text" id="login" name="login"><br>
				<span class="msg-erro" id="msg-login"></span>

				<label for="titulo">Senha</label><br>
				<input type="password" id="password" name="senha" ><br>
				<span class="msg-erro" id="msg-senha" name="senha" ></span>

				<label for="titulo">Confirmar Senha</label><br>
				<input type="password" id="passwordconf" name="senhaconfir"><br>
				<span class="msg-erro" id="msg-senhaConfirma"></span>

				<input name="submit" type="submit" onsubmit="return false;" value="enviar">
			</form>
			<?php
			include_once "../../classes/userCadastro.php";

				if(isset($_POST['submit'])){
					$tes = new userCadastro();

					$tes->insertValuesAdm();
				}

			?>

		</div>

	</div>

<script src="../../js/cadastroAdm.js"></script>
</body>
</html>

<!DOCTYPE php>
<php>
<head>
	<title>Novo Chamado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/user/novochamado.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="	stackpatha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>

	
	<div class="main">
		<?php include "../../includes/menu_left.php"; ?>
		<?php include "../../includes/top.php"?>

		<div class="content">
			<form>
				<label for="titulo">Titulo</label><br>
				<input type="text" id="" name="titulo"><br>



				<label for="descricao">Descreva o problema encontrado</label><br>
				<textarea name="descricao"></textarea><br><br>

				<label for="anexar">Anexar imagem</label><br>
				<input type="file" name="arquivo" value="" placeholder="anexar imagem"><br><br>
			</form>
			<a href="overview.php"><input type="submit" value="enviar"></a>
		</div>



	</div>
</body>
</php>
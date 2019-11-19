<!DOCTYPE html>
<?php include "../../classes/autenticado.php";?>
<php>
<head>
	<title>Overview</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/user/overview.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="	stackpatha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
	<div class="main">
		<?php include "../../includes/menu_left.php"; ?>
		<?php include "../../includes/top.php"?>


		<div class="content">
			<div class="chamado">
				<p>Titulo 1</p>
				<p>Status</p>
				<a href="viewOS.php"><input type="submit" value="+ Detalhes"></a>
			</div>

			<div class="chamado-2">
				<p>Titulo 2</p>
				<p>Status</p>
				<a href="viewOS.php"><input type="submit" value="+ Detalhes"></a>
			</div>

			<div class="chamado-3">
				<p>Titulo 3</p>
				<p>Status</p>
				<a href="viewOS.php"><input type="submit" value="+ Detalhes"></a>
			</div>

			<?php
				$teste = 1;

				echo $teste;

			?>
		</div>


	</div>
</body>
</php>

<!DOCTYPE php>
<?php include "../../classes/autenticado.php";?>
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
		<?php include "../../classes/consultaBanco.php" ?>

		<?php
		$preencherOs = new consultaBanco();
		$retu = $preencherOs->preencheOS($_GET['id']);

		?>
		<div class="content">
			<form method="post">
				<label for="numero-chamado">Número do Chamado(OS): <?php echo $_GET['id']; ?></label>
				<br><br>

				<label for="data-abert">Data de abertura: <?php echo $retu[0]['abertura_os'] ?></label>
				<br><br>

				<label for="status-chamado">Status do chamado: Em andamento</label>
				<br><br>

				<label for="nvl-prioridade">Nível de prioridade: <?php echo $retu[0]['prioridade_stat'] ?></label>
				<br><br>

				<label for="msg-enviada">Descrição: </label><br>
				<?php echo $retu[0]['conteudo_msg'] ?>
				<br><br>
				<a href="conversa.php?id=<?=$_GET['id'];?>"><input type="button" value="Conversa"></a>
				<a href="#"><input type="button" value="Gerar PDF"></a>
				<input name="submit" type="submit" value="Encerrar chamado">

			</form>
			<?php
			if (isset($_POST['submit'])){
				$preencherOs->encerarChamado($_GET['id']);
				header("Location: http://localhost/trab-integrador/programacao-II/html/user/overview.php");
			}
			?>
		</div>


<script src="../../js/view.js"></script>
</body>

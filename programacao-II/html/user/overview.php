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
		<?php include "../../classes/consultaBanco.php" ?>
		<div class="top">
			<p>Tela inicial</p>
		</div>


		<div class="content">
			<?php
				$consulta = new consultaBanco();
				$tes = $consulta->consultaChamadoCliente($_SESSION['loginClient']);

				if($tes == null){

			?>
					<p id="nota"><?php echo "Nem um chamado em aberto encontrado!";?></p>

			<?php

				} else {
					foreach ($tes as $value => $v) {
						$cor = "";

						if($tes[$value]['prioridade_stat'] == "baixa"){
							$cor = "prioridade-baixa";
						}

						elseif($tes[$value]['prioridade_stat'] == "media"){
							$cor = "prioridade-media";
						}

						elseif($tes[$value]['prioridade_stat'] == "alta"){
							$cor = "prioridade-alta";
						}

						?>

						<div class='<?php echo $cor ?>'>
									<a href="viewOS.php?id=<?=$tes[$value]['id_os'];?>">
									<span>Titulo: </span>
									<?php echo $tes[$value]['titulo_os'];?>
									<br>
									<span>Nome do responsável: </span>
									<?php echo $tes[$value]['nome_func'];?>

								</a>
						</div>

				<?php
					}
				}

				?>
		</div>



		</div>


	</div>
</body>
</php>

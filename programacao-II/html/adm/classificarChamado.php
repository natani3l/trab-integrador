<!DOCTYPE html>
<?php include "../../classes/autenticado.php";?>
<html>
<head>
	<title>Overview</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/adm/classificarChamado.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="	stackpatha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">
		<?php include "../../includes-adm/menu_left.php" ?>

		<?php include "../../includes-adm/top.php" ?>



		<div class="content">
	     <div class="chamado-OS">
				 <form method="post">


				 <?php
						 include "../../classes/consultaBanco.php";
						 $consultaDesc = new consultaBanco();
						 $cta = $consultaDesc->consultaDescricao($_GET['id']);
				 ?>

         <label for=""><strong>Número chamado (OS): <?php echo $_GET['id'];?></strong></label><br><br>

         <label><strong>Descrição do chamado:</strong></label>
         <p>
				 <?php

						foreach ($cta as $k => $v) {
							echo $cta[$k]['conteudo_msg'];
						}
				 ?></p>

         <label for="chamadoC"><strong>Selecione o nivel de prioridade:</strong></label><br>
         <select name="chamadoC">
           <option value="sel">Selecione</option>
           <option value="baixa">Baixa</option>
           <option value="media">Média</option>
           <option value="alta">Alta</option>
         </select><br><br>




         <label for="chamado"><strong>Selecione o responsavel pelo atendimento:</strong></label><br>
         <select name="chamado">
					 <?php
					 $cta = $consultaDesc->consultaFuncionario();
					 ?>
					 <option value="sel">Selecione</option>
					 <?php

					 foreach ($cta as $key => $value) {
						 ?>

						 		<option name="funcionario"><?php echo $cta[$key]['nome_func'];?></option>

						 <?php
					 }
					 ?>


				 </select><br><br>

         <input name="submit" type="submit" value="Enviar">
				 </form>
				 <?php
	 			include_once "../../classes/consultaBanco.php";

	 				if(isset($_POST['submit'])){
						$lfunc = $_POST['chamado'];
						$clchamado = $_POST['chamadoC'];
						$consultaDesc->alterarClassificaoChamado($lfunc, $clchamado, $_GET['id']);
						header("Location: http://localhost/trab-integrador/programacao-II/html/adm/overview.php");
	 				}

	 			?>


       </div>

		</div>

	</div>
</body>
</html>

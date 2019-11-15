<!DOCTYPE html>
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

		<div class="top">
			<p>Classificação de chamados</p>
		</div>

		<div class="content">
	     <div class="chamado-OS">
         <label for=""><strong>Número chamado (OS): 109</strong></label><br><br>

         <label><strong>Descrição do chamado:</strong></label>
         <p>Não consigo visualizar as solicitações enviadas pelos clientes</p>

         <label for="chamado"><strong>Selecione o nivel de prioridade:</strong></label><br>
         <select name="chamado">
           <option value="sel">Selecione</option>
           <option value="osVerde">Verde</option>
           <option value="osAmarelo">Amarelo</option>
           <option value="osVermelho">Vermelho</option>
         </select><br><br>

         <label for="chamado"><strong>Selecione o responsavel pelo atendimento:</strong></label><br>
         <select name="chamado">
           <option value="sel">Selecione</option>
           <option value="ntf">Nataniel Lemes</option>
           <option value="bb">Bruno Bevilaqua</option>
         </select><br><br>

         <a href="overview.php"><input type="submit" value="Enviar"></a>

       </div>

		</div>

	</div>
</body>
</html>

<!DOCTYPE html>
<?php include "../../classes/autenticado.php";?>
<html>
<head>
	<title>Overview</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../css/adm/conversa.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="	stackpatha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">
		<?php
		  include "../../includes/menu_left.php";
			include "../../classes/consultaBanco.php";
	    include "../../classes/mensagem.php";
		?>

		<div class="top">
			<p>Conversa</p>
		</div>

    <div class="content">
        <?php
            $mensagem = new mensagem();

            $resultado = $mensagem->consultaMensagem($_GET['id']);

            foreach ($resultado as $value => $v) {

              if($resultado[$value]['tipo_msg'] == 0){
              ?>
                <div class="mensagemEsquerda">
                    <div class="interiorEsquerda">
                        <p><?php echo $resultado[$value]['conteudo_msg']; ?></p>
                    </div>
                </div>

            <?php
              } else {
            ?>
                <div class="mensagemDireita">
                    <div class="interiorDireita">
                        <p><?php echo $resultado[$value]['conteudo_msg']; ?></p>
                    </div>
                </div>

          <?php
              }
            }
          ?>
    </div>


    <div class="conversa">

      <form method="post">

      </form>


		</div>
	</div>
</body>
</html>

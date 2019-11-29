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
		<?php include "../../includes-adm/menu_left.php" ?>
		<?php include "../../includes-adm/top.php" ?>
		<?php include "../../classes/consultaBanco.php" ?>
    <?php include "../../classes/mensagem.php" ?>
    <div class="content">
        <?php
            $mensagem = new mensagem();

            $resultado = $mensagem->consultaMensagem($_GET['id']);

            foreach ($resultado as $value => $v) {

              if($resultado[$value]['tipo_msg'] == 0){
              ?>
                <div class="mensagemDireita">
                    <?php echo $resultado[$value]['conteudo_msg']; ?>
                </div>

    		    <?php
              } else {
            ?>
                <div class="mensagemEsquerda">
                    <?php echo $resultado[$value]['conteudo_msg']; ?>
                </div>

          <?php
              }
            }
          ?>
    </div>


    <div class="conversa">

      <form method="post">

        <label for="descricao">Enviar nova mensagem</label><br>
        <textarea name="descricao"></textarea><br><br>

        <input name="submit" type="submit" value="Enviar">

      </form>

        <?php
            if(isset($_POST['submit'])){

                $result = $mensagem->escreveMensagemADM($_SESSION['loginFunc'], $_GET['id'], $_POST['descricao']);
                header("Refresh: 0");
            }
        ?>




		</div>
	</div>
</body>
</html>

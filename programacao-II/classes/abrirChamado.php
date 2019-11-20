<?php
    require_once ("BD.php");

    class abrirChamado{
      private $bd;

      function __construct(){
        $this->bd = new BD();

        if (mysqli_connect_errno()){
          echo "Erro" . mysqli_connect_error();
        }
      }

      function novoChamado(){

        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $dataAbertura = date("d/m/Y");
        $dataMensagem = date("d/m/Y H:i:s");
        $cliente = $_SESSION['loginClient'];

        $queryOS = "INSERT INTO ordem_servico (titulo_os, abertura_os, login_client, sig_stat) VALUES('$titulo', '$dataAbertura', '$cliente', 'EMA');";

        $this->bd->insert($queryOS);

        $request = "SELECT id_os FROM ordem_servico WHERE titulo_os = '$titulo';";
        $result = $this->bd->select($request);

        $idOS = $result[0]['id_os'];

        $queryMSG = "INSERT INTO mensagem (conteudo_msg, data_msg, tipo_msg, id_os, login_client) VALUES('$descricao', '$dataMensagem', 0, '$idOS', '$cliente');";

        $this->bd->insert($queryMSG);
      }
    }
 ?>

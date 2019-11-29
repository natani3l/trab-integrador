<?php
require_once ("BD.php");

class mensagem{
  private $bd;

  function __construct(){
    $this->bd = new BD();

    if (mysqli_connect_errno()){
      echo "Erro" . mysqli_connect_error();
    }
  }

  function consultaMensagem($id){
    $sql = "SELECT * FROM mensagem m WHERE m.id_os = '$id' ORDER BY(data_msg);";
    $result = $this->bd->select($sql);
    return $result;
  }

  function escreveMensagemADM($idADM, $idOS, $conteudo){
    $dataMensagem = date("Y-m-d H:i:s");

    $sql = "INSERT INTO mensagem (conteudo_msg, data_msg, tipo_msg, id_os, login_func) VALUES('$conteudo', '$dataMensagem', 1, '$idOS', '$idADM');";
    $result = $this->bd->query($sql);
    return $result;
  }

  function escreveMensagemUSR($idUSR, $idOS, $conteudo){
    $dataMensagem = date("Y-m-d H:i:s");

    $sql = "INSERT INTO mensagem (conteudo_msg, data_msg, tipo_msg, id_os, login_client) VALUES('$conteudo', '$dataMensagem', 0, '$idOS', '$idUSR');";
    $result = $this->bd->query($sql);
    return $result;
  }




}

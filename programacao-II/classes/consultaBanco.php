<?php
require_once ("BD.php");

class consultaBanco{
  private $bd;

  function __construct(){
    $this->bd = new BD();

    if (mysqli_connect_errno()){
      echo "Erro" . mysqli_connect_error();
    }
  }

  function consultaClassifica(){
    $sql = "SELECT os.titulo_os, os.id_os, client.nome_client, emp.nome_emp FROM ordem_servico os NATURAL JOIN cliente client NATURAL JOIN empresa emp WHERE os.login_func IS NULL;";
    $result = $this->bd->select($sql);
    return $result;
  }

  function consultaDescricao($id){
    $sql = "SELECT msg.conteudo_msg FROM mensagem msg WHERE msg.id_os = '$id'";
    $result = $this->bd->select($sql);
    return $result;
  }

  function consultaFuncionario(){
    $sql = "SELECT nome_func, login_func FROM funcionario";
    $result = $this->bd->select($sql);
    return $result;
  }

  function alterarClassificaoChamado($func, $prd, $id){
    $sql = "UPDATE ordem_servico SET login_func = '$func', sig_stat = 'EME', prioridade_stat = '$prd' WHERE id_os = '$id'";
    $result = $this->bd->query($sql);
    return $result;
  }

  function consultaChamadoCliente($id){
    $sql = "SELECT os.id_os, os.titulo_os, f.nome_func FROM ordem_servico os NATURAL JOIN funcionario f WHERE os.sig_stat = 'EME' AND os.login_client = '$id'";
    $result = $this->bd->select($sql);
    return $result;
  }

  function preencheOS($id){
    $sql = "SELECT os.abertura_os, os.sig_stat, os.prioridade_stat, msg.conteudo_msg FROM ordem_servico os JOIN mensagem msg ON msg.id_os = os.id_os WHERE os.id_os = '$id' ";
    $result = $this->bd->select($sql);
    return $result;
  }

  function encerarChamado($id){
    $sql = "UPDATE ordem_servico SET sig_stat = 'FEC' WHERE ID_OS = '$id'";
    $result = $this->bd->select($sql);
    return $result;
  }

  function consultaChamadoFechado($cnpj){##ARRUMAR ERRO!!!!!!!!!!!!!
    $sql = "SELECT os.id_os, os.titulo_os, f.nome_func FROM ordem_servico os NATURAL JOIN funcionario f NATURAL JOIN cliente c NATURAL JOIN empresa e WHERE os.sig_stat = 'FEC' AND e.cnpj_emp = '$cnpj';";
    $result = $this->bd->select($sql);
    return $result;
  }

  function consultaChamadoFechadoADM(){##ARRUMAR ERRO!!!!!!!!!!!!!
    $sql = "SELECT os.id_os, os.titulo_os, f.nome_func FROM ordem_servico os NATURAL JOIN funcionario f NATURAL JOIN cliente c NATURAL JOIN empresa e WHERE os.sig_stat = 'FEC';";
    $result = $this->bd->select($sql);
    return $result;
  }

  function consultaMeuChamado($loginFun){
    $sql = "SELECT os.titulo_os, os.id_os, client.nome_client, emp.nome_emp FROM ordem_servico os NATURAL JOIN cliente client NATURAL JOIN empresa emp WHERE os.login_func = '$loginFun' AND os.sig_stat = 'EME';";
    $result = $this->bd->select($sql);
    return $result;

  }



}


?>

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
    $result = $this->bd->select($sql);
    return $result;
  }




}


?>

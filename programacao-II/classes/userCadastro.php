<?php
require_once ("BD.php");
class userCadastro{
    private $bd;

    function __construct(){
      $this->bd = new BD();
      
      if (mysqli_connect_errno()){
        echo "Erro" . mysqli_connect_error();
      }
    }

    function insertValues(){
      //Cadastrar clienteq
      $login = $_POST['login'];
      $senha = $_POST['senha'];
      $email = $_POST['email'];
      $nome = $_POST['nome'];
      $cnpj = $_POST['cnpj'];

      $resultCompany = "INSERT INTO empresa (cnpj_emp, nome_emp) VALUES ('$cnpj', '$nome')";
      $resultTCompany = mysqli_query($this->bd->getConnection(), $resultCompany);

      $result = "INSERT INTO cliente (login_client, senha_client, email_client, nome_client, cnpj_emp) VALUES ('$login', '$senha', '$email', '$nome', '$cnpj')";
      $resultT = mysqli_query($this->bd->getConnection(), $result);
    }

    function insertValuesAdm(){
      //Cadastrar clienteq
      $login = $_POST['login'];
      $senha = $_POST['senha'];
      $email = $_POST['email'];
      $nome = $_POST['nome'];
      //$resultCompany = "INSERT INTO funcionario (cnpj_emp, nome_emp) VALUES ('$cnpj', '$nome')";
      //$resultTCompany = mysqli_query($this->bd->getConnection(), $resultCompany);

      $result = "INSERT INTO funcionario (login_func, senha_func, email_func, nome_func) VALUES ('$login', '$senha', '$email', '$nome')";
      $resultT = mysqli_query($this->bd->getConnection(), $result);
    }

    function authenticate($login, $senha){
      $sql = "SELECT * FROM cliente WHERE login_client='$login' AND senha_client = '$senha'";
      $result = $this->bd->select($sql);
      return $result;
    }

    function authenticateAdm($login, $senha){
      $sql = "SELECT * FROM funcionario WHERE login_func='$login' AND senha_func = '$senha'";
      $result = $this->bd->select($sql);
      return $result;
    }
}
?>

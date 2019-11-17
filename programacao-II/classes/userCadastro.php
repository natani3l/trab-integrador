<?php
require_once ("BD.php");
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];

$resultCompany = "INSERT INTO empresa (cnpj_emp, nome_emp) VALUES ('$cnpj', '$nome')";
$resultTCompany = mysqli_query($conn, $resultCompany);

echo "<br><br>";

$result = "INSERT INTO cliente (login_client, senha_client, email_client, nome_client, cnpj_emp) VALUES ('$login', '$senha', '$email', '$nome', '$cnpj')";
$resultT = mysqli_query($conn, $result);

/*
/*if (mysqli_num_rows($resultT) == 0){
  echo "nao foi";
}else{
  header("Location: http://localhost/trab-integrador/programacao-II/html/adm/overview.php");
}*/

?>

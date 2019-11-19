<?php
session_start();
if($_SESSION['autenticado'] == 0){
  session_destroy();
  header("Location: http://localhost/trab-integrador/programacao-II/html/login/login.php");
}
?>

<div class="menu">
  <div class="user"><i class="fa fa-user fa-5x"></i></div>
  <form method="post">
    <button class="logout" name="botaoLogout">Logout</button>
  </form>
  <?php
  if (isset($_POST['botaoLogout'])){
    $_SESSION['autenticado'] = 0;
    header("Location: http://localhost/trab-integrador/programacao-II/html/login/login.php");
  }
  ?>
  <ul>
    <li><a href="overview.php">Ínicio</a></li>
    <li><a href="novochamado.php">Abrir Chamado</a></li>
    <li><a href="basedados.php">Base de Dados</a></li>
  </ul>
</div>

<?php
class BD{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "dbsupport";
    private $conn;



    function __construct(){
      // $conn = new mysqli($host, $user, $password, $database);
      $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
      mysqli_query($this->conn, "SET NAMES 'utf8'");
      if (mysqli_connect_errno()){
        echo "Erro" . mysqli_connect_error();
      }
    }

    function getConnection(){
        return $this->conn;
    }

    function insert($sql){
      mysqli_query($this->conn, $sql);
    }

    function select($sql) {
    //recebe um select qualquer, executa e devolve um array de resultados.
    //o resultado será um array com índice numérico, onde cada linha conterá um array associativo com os dados selecionados no BD
    $retorno = mysqli_query($this->conn, $sql); // $this->conn->query($sql);
    $arrayResultados = array();
    if (mysqli_num_rows($retorno) > 0) {
        while($linha = mysqli_fetch_assoc($retorno)) {
            $arrayResultados[] = $linha;
        }
    }
    return $arrayResultados;
}

  }


?>

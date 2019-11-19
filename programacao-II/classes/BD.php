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
  }

?>

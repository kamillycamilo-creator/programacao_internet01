<?php 
class Database{
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "todolist";

    public $conn;

    public function conectar (): mysqli{
        $this-> conn = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);

     if ($this->conn-> connect_error){
        die("deu erro".$this->conn->connect_error);
     }
        return $this-> conn;
}
}
?>
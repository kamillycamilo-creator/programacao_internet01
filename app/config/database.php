<?php
class DBConnector { // Nome da classe alterado
    private $host = "localhost";
    private $user = "root"; // Nome da variável alterado
    private $pass = ""; // Nome da variável alterado
    private $dbName = "login"; // Nome da variável alterado
    public $link; 

    public function getConnection() // Nome do método alterado
    {
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbName);

        if ($this->link->connect_error) {
            die("Connection Error: " . $this->link->connect_error); // Mensagem alterada
        }

        return $this->link;
    }
}
?>
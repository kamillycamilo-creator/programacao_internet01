<?php
require_once __DIR__ . '/../config/database.php';

class UserHandler 
{
    private $dbConn; 

    public function __construct()
    {
        $db = new DBConnector(); 
        $this->dbConn = $db->getConnection(); 
    }

    public function authenticateUser($email, $senha) 
    {
       
        $email = $this->dbConn->real_escape_string($email);
        $senha = $this->dbConn->real_escape_string($senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = $this->dbConn->query($sql);

        return $result->fetch_assoc();
    }
}
?>
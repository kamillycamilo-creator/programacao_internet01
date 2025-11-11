<?php


$host = 'localhost';
$usuaro = 'root';
$senha = '';
$database = 'login';

$conn = new mysqli($host, $usuario, $senha, $database );

if($conn -> connect_error){
    die ("não deu certo fazer a conexão");
}


?>
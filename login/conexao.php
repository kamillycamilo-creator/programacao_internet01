<?php


$host = 'localhost';
$usuarios = 'root';
$senha = '';
$database = 'login';

$mysqli = new mysqli($host, $usuarios, $senha, $database );

if($mysqli -> connect_error){
    die ("não deu certo fazer a conexão");
}


?>
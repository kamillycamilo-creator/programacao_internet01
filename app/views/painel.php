<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
if(!isset($_SESSION['id'])){
    header('Location: erro.php'); // <-- Redirecionamento para o novo nome do arquivo
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>

<h1>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h1>

<p><a href="index.php?action=logout">Sair</a></p>

</body>
</html>
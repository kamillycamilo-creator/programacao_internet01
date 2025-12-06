<?php
require_once __DIR__ . '/app/controllers/AuthController.php';

$controller = new AuthController(); 

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'login':
        $controller->login();
        break;

    case 'painel':
        $controller->painel();
        break;

    case 'logout':
        $controller->logout();
        break;

    default:
        $controller->index();
        break;
}
?>
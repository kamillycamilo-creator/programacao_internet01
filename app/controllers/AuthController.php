<?php
require_once __DIR__ . '/../models/usuario.php';

class AuthController { 
    private $userHandler; 

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->userHandler = new UserHandler(); 
    }

    public function index() {
        include __DIR__ . '/../views/login.php';
    }

    public function login() {
        if (empty($_POST['email']) || empty($_POST['senha'])) {
            $_SESSION['erro'] = 'Preencha os campos de acesso.'; 
            header('Location: index.php');
            exit; 
        }

        $userData = $this->userHandler->authenticateUser($_POST['email'], $_POST['senha']); 

        if ($userData !== null) {
            $_SESSION['id'] = $userData['id'];
            $_SESSION['nome'] = $userData['nome'];
            header("Location: index.php?action=painel");
            exit;
        } else {
            $_SESSION['erro'] = 'Credenciais inválidas.'; 
            header('Location: index.php');
            exit;
        }
    }

    public function painel() {
        include __DIR__ . '/../views/painel.php';
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
        exit;
    }
}
?>
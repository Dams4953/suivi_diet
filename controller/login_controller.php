<?php
session_start();
require_once '../model/userModel.php';
require_once '../controller/Login_controller.php';

$loginController = new LoginController();
$loginController->processLogin();

// LOGIN si username et password correspondent dans la base de donnée (login)
class LoginController
{
    public function processLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['password'])) {
            $username = htmlspecialchars($_POST['username']);
            $password = $_POST['password'];

            $userModel = new UserModel(getDBConnection());
            $user = $userModel->getUserByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username;
                header('Location: ../view/profil.php');
                exit();
            } else {
                echo "Nom d'utilisateur ou mot de passe incorrect.";
            }
        } else {
            echo "Certains champs sont manquants.";
        }
    }
}
?>

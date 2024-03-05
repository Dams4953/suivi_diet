<?php
require_once '../model/userModel.php';

// Créer un user avec les données rentrées (register)
class RegisterController
{
    public function processRegistration()
    {

        if (
            $_SERVER['REQUEST_METHOD'] === 'POST' &&
            isset($_POST['first_name'], $_POST['last_name'], $_POST['username'], $_POST['email'], $_POST['phone_number'], $_POST['password'])
        ) {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone_number'];
            $password = $_POST['password'];

            $userModel = new UserModel(getDBConnection());
            $userModel->createUser($firstName, $lastName, $username, $email, $phone, $password);

            header('Location: ../view/registerGood.php');
            exit();
        } else {
            echo "Certaines données nécessaires sont manquantes.";
        }
    }
}

$authController = new RegisterController();
$authController->processRegistration();
?>



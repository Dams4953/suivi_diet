<?php
require_once '../config/db_connection.php';

class UserModel
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function createUser($firstName, $lastName, $username, $email, $phone, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = $this->db->prepare("INSERT INTO users (firstname, lastname, username, email, phone, password) VALUES (:first_name, :last_name, :username, :email, :phone_number, :password)");

        $query->bindParam(':first_name', $firstName);
        $query->bindParam(':last_name', $lastName);
        $query->bindParam(':username', $username);
        $query->bindParam(':email', $email);
        $query->bindParam(':phone_number', $phone);
        $query->bindParam(':password', $hashedPassword);

        $query->execute();
        
    }
}

<?php
require('../controller/login_controller.php');

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
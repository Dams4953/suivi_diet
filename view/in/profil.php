<?php
require('../controller/login_controller.php');

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex">
    <nav class="p-2 absolute top-0 left-0 right-0 h-20 bg-gray-800 overflow-hidden w-full">
        <div class="flex items-center justify-between w-full">
            <a href="http://projets.test/suivi_diet/" class="hover:text-gray-300">
                <img src="src/img/logo1.png" alt="Logo" class="-mt-9 h-36 w-auto">
            </a>
            <div class="flex items-center space-x-4">
                <form action="" method="POST">
                    <img src="src/img/hamburger.svg" alt="hamburger" class="-mt-11 mr-8 h-12 w-auto">
                </form>
            </div>
        </div>
    </nav>

    <nav class="top-0 left-0 h-screen bg-gray-300 w-44">
        <div class="mt-36 w-44 flex flex-col items-center">
        <a href="http://projets.test/suivi_diet/view/in/weighing.php" class="hover:text-gray-800">Pesée</a>
        <a href="http://projets.test/suivi_diet/view/in/nutrition.php" class="mt-6 hover:text-gray-800">Nutrition</a>
        <a href="http://projets.test/suivi_diet/view/in/sport.php" class="mt-6 hover:text-gray-800">Sport</a>
        </div>
        
    </nav>



</body>

</html>
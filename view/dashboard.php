<?php
require('../controller/login_controller.php');

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

<nav class="bg-gray-100 p-4 absolute top-0 left-0 right-0 border-b-4">
    <div class="w-full flex items-center justify-between">
        <a href="http://projets.test/suivi_diet/" class="hover:text-gray-300">
            <img src="src/img/logo.png" alt="Logo" class="mx-auto h-40 w-auto">
        </a>
        <div class="flex items-center space-x-4">
            <form action="" method="POST">
                <button type="submit" class="font-bold text-gray-800 py-2 px-4">Calculateur IMC</button>
            </form>
            <form action="" method="POST">
                <button type="submit" class="font-bold text-gray-800 py-2 px-4">Calculateur métabolisme basal</button>
            </form>
            <form action="" method="POST">
                <button type="submit" class="font-bold bg-black text-white py-2 px-4 mx-8 rounded-full hover:bg-gray-700">Mon profil</button>
            </form>
        </div>
    </div>
</nav>

<div class="container mx-auto p-4 mt-16 grid grid-cols-1 md:grid-cols-3 gap-4 mt-60">
    
    <div class="bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-bold mb-4">Pesée</h2>
        
        <div class="mb-4">
            <label for="poids" class="text-lg font-bold">Poids :</label>
            <input type="text" name="poids" id="poids" required class="rounded-md p-2 w-full border border-gray-300 bg-gray-50">
        </div>

        <div class="mb-4">
            <label for="imc" class="text-lg font-bold">IMC :</label>
            <input type="text" name="imc" id="imc" required class="rounded-md p-2 w-full border border-gray-300 bg-gray-50">
        </div>

        <div class="mb-4">
            <label for="img" class="text-lg font-bold">IMG :</label>
            <input type="text" name="img" id="img" required class="rounded-md p-2 w-full border border-gray-300 bg-gray-50">
        </div>

        <div class="mb-4">
            <label for="imm" class="text-lg font-bold">IMM :</label>
            <input type="text" name="imm" id="imm" required class="rounded-md p-2 w-full border border-gray-300 bg-gray-50">
        </div>
     
        <button type="submit" class="bg-blue-500 text-white rounded-md p-2 w-full mt-4">Ajouter</button>
    </div>

   
    <div class="bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-bold mb-4">Nutrition</h2>
        
        <div class="mb-4">
            <label for="kcal" class="text-lg font-bold">Kcal :</label>
            <input type="text" name="kcal" id="kcal" required class="rounded-md p-2 w-full border border-gray-300 bg-gray-50">
        </div>

        <div class="mb-4">
            <label for="glucides" class="text-lg font-bold">Glucides :</label>
            <input type="text" name="glucides" id="glucides" required class="rounded-md p-2 w-full border border-gray-300 bg-gray-50">
        </div>

        <div class="mb-4">
            <label for="proteines" class="text-lg font-bold">Protéines :</label>
            <input type="text" name="proteines" id="proteines" required class="rounded-md p-2 w-full border border-gray-300 bg-gray-50">
        </div>

        <div class="mb-4">
            <label for="lipides" class="text-lg font-bold">Lipides :</label>
            <input type="text" name="lipides" id="lipides" required class="rounded-md p-2 w-full border border-gray-300 bg-gray-50">
        </div>
        
        <button type="submit" class="bg-blue-500 text-white rounded-md p-2 w-full mt-4">Ajouter</button>
    </div>

    
    <div class="bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-bold mb-4">Sport</h2>
        
        <div class="mb-4">
            <label for="activite" class="text-lg font-bold">Activité :</label>
            <input type="text" name="activite" id="activite" required class="rounded-md p-2 w-full border border-gray-300 bg-gray-50">
        </div>

        <div class="mb-4">
            <label for="duree" class="text-lg font-bold">Durée (en minutes) :</label>
            <input type="text" name="duree" id="duree" required class="rounded-md p-2 w-full border border-gray-300 bg-gray-50">
        </div>
        
        <button type="submit" class="bg-blue-500 text-white rounded-md p-2 w-full mt-4">Ajouter</button>
    </div>
</div>

</body>
</html>

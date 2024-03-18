<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex w-full">
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

    <nav class="top-0 left-0 h-screen bg-gray-300 w-auto">
        <div class="mt-36 w-44 flex flex-col items-center">
            <a href="http://projets.test/suivi_diet/view/in/weighing.php" class="hover:text-gray-800">Pesée</a>
            <a href="http://projets.test/suivi_diet/view/in/nutrition.php" class="mt-6 hover:text-gray-800">Nutrition</a>
            <a href="http://projets.test/suivi_diet/view/in/sport.php" class="mt-6 hover:text-gray-800">Sport</a>
        </div>
    </nav>

    <main class="w-full flex">
        <div class="mt-44 ml-20 w-5/12 ">
            <?php include('calendar.php'); ?>
        </div>

        <div class="mt-44 ml-56 w-6/10">
            <form action="process_form.php" method="POST" class="bg-white p-8 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Ajouter une entrée</h2>

                <div class="mb-4">
                    <label for="kcal" class="block text-sm font-medium text-gray-600">Kcal:</label>
                    <input type="text" id="kcal" name="kcal" class="w-full p-2 border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="glucides" class="block text-sm font-medium text-gray-600">Glucides (g):</label>
                    <input type="text" id="glucides" name="glucides" class="w-full p-2 border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="proteines" class="block text-sm font-medium text-gray-600">Protéines (g):</label>
                    <input type="text" id="proteines" name="proteines" class="w-full p-2 border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="lipides" class="block text-sm font-medium text-gray-600">Lipides (g):</label>
                    <input type="text" id="lipides" name="lipides" class="w-full p-2 border rounded-md" required>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Ajouter</button>
            </form>
        </div>
    </main>
</body>

</html>
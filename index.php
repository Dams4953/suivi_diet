<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-green-500 flex items-center justify-center h-screen">

    <nav class="bg-green-1000 p-4 absolute top-0 left-0 right-0 border-b-4">
        <div class="w-full flex items-center justify-between">
            <a href="http://projets.test/suivi_diet/" class="hover:text-gray-300">
                <img src="view/src/img/logo.png" alt="Logo" class="mx-auto h-40 w-auto">
            </a>
            <div class="flex items-center space-x-4">
                <form action="" method="POST">
                    <button type="submit" class="font-bold text-gray-800 py-2 px-4">Calculateur IMC</button>
                </form>
                <form action="" method="POST">
                    <button type="submit" class="font-bold text-gray-800 py-2 px-4">Calculateur métabolisme basal</button>
                </form>
                <form action="view/login.php" method="POST">
                    <button type="submit" class="font-bold bg-green-600 text-white py-2 px-4 mx-8 rounded-full hover:bg-green-700">Mon profil</button>
                </form>
            </div>
        </div>
    </nav>

</body>

</html>

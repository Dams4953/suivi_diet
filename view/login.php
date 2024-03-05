<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md w-96">

        <h1 class="text-2xl font-semibold mb-6">Connexion</h1>

        <form action="../controller/login_controller.php" method="POST">

            <div class="mb-4">
                <label for="username" class="block text-gray-600 text-sm font-medium mb-2">Nom d'utilisateur</label>
                <input type="username" id="username" name="username" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Mot de passe</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
            </div>

            <button type="submit" name="login" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Se connecter</button>

        </form>

        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">Vous n'avez pas de compte ? <a href="http://projets.test/suivi_diet/view/register.php" class="text-blue-500">S'inscrire</a></p>
        </div>

    </div>

</body>

</html>

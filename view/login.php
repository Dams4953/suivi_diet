<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .flou {
            backdrop-filter: blur(10px);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.2));
        }
    </style>
</head>

<body class="h-screen flex flex-col items-start justify-start bg-no-repeat bg-cover bg-center"
    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('src/img/background1.jpg');">
    <nav>
        <a href="http://projets.test/suivi_diet/" class="hover:text-gray-300">
            <img src="src/img/logo.png" alt="Logo" class="ml-20 h-96 w-auto">
        </a>
    </nav>

    <main class="mx-auto">
        <div class="bg-white p-8 rounded shadow-md w-96 flou">

            <h1 class="text-white text-2xl font-semibold mb-6">Connexion</h1>

            <form action="../controller/login_controller.php" method="POST">

                <div class="mb-4">
                    <label for="username"
                        class="block text-white text-sm font-medium mb-2">Nom d'utilisateur</label>
                    <input type="username" id="username" name="username"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
                </div>

                <div class="mb-4">
                    <label for="password"
                        class="block text-white text-sm font-medium mb-2">Mot de passe</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
                </div>

                <button type="submit" name="login"
                    class="w-full bg-black text-white p-2 rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:border-blue-300">Se
                    connecter</button>

            </form>

            <div class="mt-4 text-center">
                <p class="text-sm text-white">Vous n'avez pas de compte ? <a
                        href="http://projets.test/suivi_diet/view/register.php"
                        class="text-blue-500">S'inscrire</a></p>
            </div>

        </div>
    </main>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Cinzel:wght@400..900&family=Great+Vibes&family=Satisfy&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <style>
        .flou {
            backdrop-filter: blur(10px);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.2));
        }

        .intro-text {
            position: absolute;
            top: 0;
            left: 0;
            margin-top: 20px;
            margin-left: 20px;
            max-width: 1200;
            z-index: 1;
        }

        .custom-text {
            font-family: 'Black Ops One', sans-serif;
            opacity: 0.6;
        }

        .fade-in-paragraph {
            opacity: 0;
            animation: fadeIn 3s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 0.6;
            }
        }

        .delay-3s {
            animation-delay: 0.5s;
        }

        .delay-5s {
            animation-delay: 3s;
        }

        .delay-7s {
            animation-delay: 5s;
        }

        .delay-9s {
            animation-delay: 7s;
        }

        .delay-11s {
            animation-delay: 9s;
        }

        .delay-13s {
            animation-delay: 11s;
        }

        .delay-15s {
            animation-delay: 13s;
        }
    </style>
</head>

<body class="h-screen flex flex-col items-start justify-start bg-no-repeat bg-cover bg-center bg-black" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('src/img/3.jpg');">>
    <nav>
        <div class="flex items-center">
            <div class="ml-16 -mt-16">
                <a href="http://projets.test/suivi_diet/" class="hover:text-gray-300">
                    <img src="src/img/logo1.png" alt="Logo" class="h-96 w-auto">
                </a>
            </div>
        </div>
    </nav>

    <div style="position: absolute; top: 500px; right: 500px;">
        <p class="fade-in-paragraph delay-9s text-white font-serif italic text-3xl mb-2 custom-text">Contrôle</p>
    </div>

    <div style="position: absolute; top: 700px; right: 150px;">
        <p class="fade-in-paragraph delay-7s text-white font-serif italic text-3xl mb-2 custom-text">Organisation</p>
    </div>

    <div style="position: absolute; top: 250px; right: 300px;">
        <p class="fade-in-paragraph delay-5s text-white font-serif italic text-3xl mb-2 custom-text">Sport</p>
    </div>

    <div style="position: absolute; top: 550px; left: 180px;">
        <p class="fade-in-paragraph delay-3s text-white font-serif italic text-3xl mb-2 custom-text">Nutrition</p>
    </div>

    <div style="position: absolute; top: 800px; left: 500px;">
        <p class="fade-in-paragraph delay-11s text-white font-serif italic text-3xl mb-2 custom-text">Analyse</p>
    </div>

    <div style="position: absolute; top: 300px; left: 450px;">
        <p class="fade-in-paragraph delay-13s text-white font-serif italic text-3xl mb-2 custom-text ">Motivation</p>
    </div>


    <main class="mx-auto -mt-48">

        <div class="bg-white p-8 rounded shadow-md w-96 flou">

            <h1 class="text-2xl text-white font-semibold mb-6">Inscription</h1>

            <form action="../controller/register_controller.php" method="POST">

                <div class="mb-4">
                    <label for="first_name" class="block text-white text-sm font-medium mb-2">Prénom</label>
                    <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
                </div>

                <div class="mb-4">
                    <label for="last_name" class="block text-white text-sm font-medium mb-2">Nom de famille</label>
                    <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-white text-sm font-medium mb-2">Adresse e-mail</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
                </div>

                <div class="mb-4">
                    <label for="phone_number" class="block text-white text-sm font-medium mb-2">Numéro de téléphone</label>
                    <input type="tel" id="phone_number" name="phone_number" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400">
                </div>

                <div class="mb-4">
                    <label for="username" class="block text-white text-sm font-medium mb-2">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-white text-sm font-medium mb-2">Mot de passe</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
                </div>

                <button type="submit" name="submit_registration" class="w-full bg-black text-white p-2 rounded-md hover:bg-gray-700 focus:outline-none focus:ring focus:border-blue-300">S'inscrire</button>

            </form>

            <div class="mt-4 text-center">
                <p class="text-sm text-white">Vous avez déjà un compte ? <a href="http://projets.test/suivi_diet/view/login.php#" class="text-blue-500">Se connecter</a></p>
            </div>

        </div>
    </main>

</body>

</html>
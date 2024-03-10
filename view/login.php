<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Cinzel:wght@400..900&family=Great+Vibes&family=Satisfy&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <style>
        .flou {
            backdrop-filter: blur(10px);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.2));
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

        .delay-05s {
            animation-delay: 0.5s;
        }

        .delay-3s {
            animation-delay: 3s;
        }

        .delay-5s {
            animation-delay: 5s;
        }
    </style>
</head>

<body class="h-screen flex flex-col items-start justify-start bg-no-repeat bg-cover bg-center" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('src/img/background1.jpg');">
    <nav>
        <div class="flex items-center">
        <div class="ml-16 -mt-11">
                <a href="http://projets.test/suivi_diet/" class="hover:text-gray-300">
                    <img src="src/img/logo1.png" alt="Logo" class="h-96 w-auto">
                </a>
            </div>
        </div>
    </nav>

    <div style="position: absolute; top: 250px; left: 100px;">
        <p class="fade-in-paragraph delay-05s text-white font-serif italic text-2xl custom-text">Sculptez harmonieusement votre corps</p>
        <p class="fade-in-paragraph delay-3s text-white font-serif italic text-2xl mt-6 custom-text">Maîtrisez judicieusement votre nutrition</p>
        <p class="fade-in-paragraph delay-5s text-white font-serif italic text-2xl mt-6 custom-text">Excellez dans votre sport avec passion</p>
    </div>



    <main class="mx-auto mt-4">

        <div class="bg-white p-8 rounded shadow-md w-96 flou">

            <h1 class="text-white text-2xl font-semibold mb-6">Connexion</h1>

            <form action="../controller/login_controller.php" method="POST">

                <div class="mb-4">
                    <label for="username" class="block text-white text-sm font-medium mb-2">Nom d'utilisateur</label>
                    <input type="username" name="username" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-white text-sm font-medium mb-2">Mot de passe</label>
                    <input type="password" name="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-400" required>
                </div>

                <button type="submit" name="login" class="w-full bg-black text-white p-2 rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:border-blue-300">Se
                    connecter</button>

            </form>

            <div class="mt-4 text-center">
                <p class="text-sm text-white">Vous n'avez pas de compte ? <a href="http://projets.test/suivi_diet/view/register.php" class="text-blue-500">S'inscrire</a></p>
            </div>
        </div>
    </main>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var fadeParagraphs = document.querySelectorAll('.fade-in-paragraph');

        fadeParagraphs.forEach(function(paragraph) {
            paragraph.classList.add('fade-in');
        });
    });
</script>


</html>



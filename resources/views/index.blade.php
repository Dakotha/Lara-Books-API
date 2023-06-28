<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Books API</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="max-w-5xl mx-auto p-6 lg:p-8">
                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="py-10 px-6 text-gray-300 dark:text-gray-300 text-sm leading-relaxed">
                        <h1 class="mt-6 mb-2 text-4xl font-semibold text-gray-900 dark:text-white">Zadanie rekrutacyjne</h1>

                        <p>Jest to pierwsza część zadania rekrutacyjnego, polegająca na stworzeniu API dla frontendowej aplikacji pobierającej i wyświetlającej dane.</p>

                        <h2 class="mt-6 mb-2 text-xl font-semibold text-gray-900 dark:text-white">Opis zadania</h2>

                        <p>Zadanie składa się z dwóch części. Najpierw należy stworzyć API serwujące listę książek. Każda książka może należeć do jednej kategorii i do wielu autorów.
                        Następnie należy stworzyć aplikację pobierającą i wyświetlającą dane z API. Ta aplikacja jest pierwszą częśćią zadania.</p>

                        <h2 class="mt-6 mb-2 text-xl font-semibold text-gray-900 dark:text-white">Opis endpointów</h2>

                        <p>Opis endpointów znajdziesz w pliku README.md w repozytorium z którego pobrałeś tę aplikację.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

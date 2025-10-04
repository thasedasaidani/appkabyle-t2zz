<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'MyAppKabyle') }}</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Optionnel : police sympa -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">
    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-blue-600 via-green-500 to-yellow-400 shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
 <!-- 🔹 LOGO + Nom -->
            <a href="/" class="flex items-center space-x-3">
            <img src="{{ asset('/assets/test.png') }}" alt="MyAppKabyle Logo" class="w-15 h-12 rounded-full shadow-md">
                <span class="text-white text-3xl md:text-4xl" style="font-family: 'Pacifico', cursive;">
              ELMED Yidi </span>
            </a>
            <ul class="flex flex-wrap items-center gap-6">
                <x-link-item href="/" :active="Route::currentRouteName() == 'welcome'">- Azul- </x-link-item>
                <x-link-item href="/homepage" :active="Route::currentRouteName() == 'home'">Home Page</x-link-item>
                <x-link-item href="/about" :active="Route::currentRouteName() == 'about'">About</x-link-item>
                <x-link-item href="/contact" :active="Route::currentRouteName() == 'contact'">Contact</x-link-item>
                <x-link-item href="/lessons" :active="Route::currentRouteName() == 'lessons'">Lessons</x-link-item>
                <x-link-item href="/quizzes" :active="Route::currentRouteName() == 'quizzes'">Quizzes</x-link-item>
                <x-link-item href="/vocabulary" :active="Route::currentRouteName() == 'vocabulary'">Vocabulary</x-link-item>
                <x-link-item href="/progress" :active="Route::currentRouteName() == 'progress'">Progress</x-link-item>
            </ul>
        </div>
    </nav>

    <!-- Contenu principal -->
    <main class="container mx-auto mt-8 px-6">
        {{ $slot }}
    </main>
</body>
</html>

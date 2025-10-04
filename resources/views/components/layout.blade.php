
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

<body>

    <nav>
        <ul>
            <x-link-item href="/" active=true>MyAppKabyle</x-link-item>
            <x-link-item href="/homepage">home page</x-link-item>
            <x-link-item href="/about">about page</x-link-item>
             <x-link-item href="/contact">contact page</x-link-item>
            <x-link-item href="/lessons">lessons page</x-link-item>
            <x-link-item href="/quizzes">quizzes page</x-link-item>
            <x-link-item href="/vocabulary">vocabulary page</x-link-item>
            <x-link-item href="/progress">progress page</x-link-item>

        </ul>
    </nav>

    <!-- Ici Laravel va injecter ton contenu -->
    {{ $slot }}
</body>

</html>
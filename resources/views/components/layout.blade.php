<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

<body>

    <nav>
        <ul>
            <x-link-item/>
            <li><a href="/homepage">Go to Home Page</a></li>
            <li><a href="/about">Go to About Page</a></li>
            <li><a href="/contact">Go to Contact Page</a></li>
            <li><a href="/lessons">Go to Lessons Page</a></li>
            <li><a href="/quizzes">Go to Quizzes Page</a></li>
            <li><a href="/vocabulary">Go to Vocabulary Page</a></li>
            <li><a href="/progress">Go to Progress Page</a></li>
        </ul>
    </nav>

    <!-- Ici Laravel va injecter ton contenu -->
    {{ $slot }}
</body>

</html>
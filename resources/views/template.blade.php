<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="py-6 flex flex-col justify-between items-center min-h-screen">

    <main role="main" class="flex flex-col justify-center items-center">
        @yield('body')
    </main>

    {{ config('project.slogan') }}

    <footer class="text-gray-400">
        <p>&copy; copyright {{ date('Y') }}
            @if (!Route::is('about'))
                &middot; <a href="{{ route('about') }}" class="text-indigo-500 hover:text-indigo-600 underline">About
                    Us</a>
        </p>
        @endif
    </footer>
</body>


</html>

</html>

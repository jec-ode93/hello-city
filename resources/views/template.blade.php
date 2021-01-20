<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    </head>
    <body>
        @yield('body')
        {{config('project.slogan')}}
        
        <footer>
            <p>&copy; copyright {{date('Y')}}
                @if(!Route::is('about'))
                    &middot;  <a href="{{route('about')}}">About Us</a></p>
                @endif
        </footer>
    </body>
   
    
</html>

</html>
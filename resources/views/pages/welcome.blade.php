<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>Hello City</title>

       
    </head>
    
    <body>
        <h1>Hello from Quebec!</h1>
        <p>It's currently {{date('h:i A')}}</p>

    </body>
<footer>&copy; copyright {{date('Y')}} &middot;  <a href="about_us">About Us</a> </footer>
</html>


<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comics - @yield('website-title')</title>
        @vite('resources/js/app.js')
        @yield('head-imports')

    </head>
    <body>
    
        <header>
            @yield('header-content')
        </header>

        <main>
            @yield('main-content')
        </main>
    </body>
</html>
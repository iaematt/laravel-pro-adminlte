<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>@yield('title')</title>

        @vite('resources/scss/app.scss')
    </head>

    <body class="@yield('body-class') bg-body-secondary">
        @yield('content')

        @vite('resources/js/app.js')
    </body>
</html>

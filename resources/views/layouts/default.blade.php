<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>@yield('title')</title>

        @vite('resources/scss/app.scss')
    </head>

    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
        <div class="app-wrapper">
            @include('fragments/header')

            @include('fragments/sidebar')

            <main class="app-main">
                @include('fragments/content-header')
                <div class="app-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </main>

            @include('fragments/footer')
        </div>

        @vite('resources/js/app.js')
    </body>
</html>

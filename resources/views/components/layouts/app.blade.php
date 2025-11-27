<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="/public/build/assets/app-BPWzf21J.css">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-cover bg-center bg-fixed" style="background-image: url('{{ $bg }}');">
        
        <x-partials.navbar />

        <div class="pt-20  w-full flex justify-center">
            <div class="w-full max-w-7xl p-5 md:p-0">
                {{ $slot }}
            </div>
        </div>


        <h1 class="text-7xl text-red-600"> TEST CHANGE</h1>
        

    </body>
</html>
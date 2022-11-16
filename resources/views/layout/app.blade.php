<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="antialiased text-gray-800 dark:text-gray-200">
        <div class="min-h-screen pt-24 bg-gray-100 dark:bg-gray-800">
            <x-layout.navbar></x-layout.navbar>
            {{ $slot }}
            <x-layout.footer></x-layout.footer>
        </div>
    @livewireScripts
    </body>
</html>


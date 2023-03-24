<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</head>

<body class="antialiased">

    <x-layouts._partials.header />

    <div
        class="relative mx-auto min-h-screen bg-gray-900 bg-center px-6 py-8 shadow-2xl sm:flex sm:items-center sm:justify-center sm:px-24 lg:py-24 xl:py-32">
        {{ $slot }}
    </div>

</body>

</html>

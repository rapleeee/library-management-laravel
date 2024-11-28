<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    </head>
    <body class="font-sans text-gray-900 antialiased">
            <!-- Navbar with Dark Mode Toggle -->
    <nav class="bg-white border-gray-200 p-4 dark:bg-gray-900 drop-shadow-lg">
        <div class="flex flex-wrap justify-end items-center mx-auto max-w-screen-xl gap-6">
            <p>{{ now()->format('l, d M Y | H:i') }}</p>
            <i class="fa-regular fa-calendar"></i>
            <button id="theme-toggle" >
                <i id="theme-toggle-icon" class="fas fa-sun"></i>
            </button>
        </div>
    </nav>
        <div class="min-h-screen flex flex-row  gap-8 sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div >
               <img src="{{ asset('images/img/siswa.png') }}" alt="" class="w-full max-w-md">
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-[#FFC000] dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

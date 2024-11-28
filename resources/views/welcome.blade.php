<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="" type="image/icon type">
    <title>Library Management</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body class="font-sans antialiased dark:bg-gray-700 dark:text-white/50" id="body">

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

<!-- Main Content -->
<section class="bg-white dark:bg-gray-700 flex justify-center items-center">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <img class="w-full dark:block" src="./images/img/siswa.png" alt="dashboard image">
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Selamat Datang di e Perpustakaan SMK Pesat IT XPRO</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Silahkan login dengan akun anggota anda, jika belum memiliki silahkan datang ke perpustakaan dan daftarkan akun anda segera</p>
            <!-- Authentication Links -->
            @if (Route::has('login'))
            <nav class="flex flex-1 justify-start gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black bg-slate-500 ring-1 ring-transparent transition hover:text-black/70 dark:text-white">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black bg-slate-500 ring-1 ring-transparent transition hover:text-black/70 dark:text-white">
                        Log in
                    </a>
                @endauth
            </nav>
            @endif
        </div>
    </div>
</section>

<!-- Dark Mode Toggle Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const body = document.getElementById("body");
        const themeToggle = document.getElementById("theme-toggle");
        const themeToggleIcon = document.getElementById("theme-toggle-icon");

        // Check local storage for the saved theme
        if (localStorage.getItem("theme") === "dark") {
            body.classList.add("dark");
            themeToggleIcon.classList.remove("fa-sun");
            themeToggleIcon.classList.add("fa-moon");
        } else {
            themeToggleIcon.classList.remove("fa-moon");
            themeToggleIcon.classList.add("fa-sun");
        }

        // Toggle dark mode
        themeToggle.addEventListener("click", () => {
            body.classList.toggle("dark");

            // Update the icon and save to local storage
            if (body.classList.contains("dark")) {
                themeToggleIcon.classList.remove("fa-sun");
                themeToggleIcon.classList.add("fa-moon");
                localStorage.setItem("theme", "dark");
            } else {
                themeToggleIcon.classList.remove("fa-moon");
                themeToggleIcon.classList.add("fa-sun");
                localStorage.setItem("theme", "light");
            }
        });
    });
</script>

</body>
</html>

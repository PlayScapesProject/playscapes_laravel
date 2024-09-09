<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Playscapes</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    <!--Custom CSS-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/support.css') }}">

</head>

<body class="">
    <!-- Navigation Bar -->
    {{-- <nav class="flex items-center justify-between p-4 bg-white shadow-md">
        <div class="text-lg font-semibold">Playscapes</div>
        <div class="flex">
            <div class="space-x-4 hidden md:flex mr-3">
                <a href="#" class="text-gray-700 uppercase">Outdoor</a>
                <a href="#" class="text-gray-700 uppercase">Indoor</a>
                <a href="#" class="text-gray-700 uppercase">How to Buy</a>
            </div>
            <div>
                <button id="menu-btn" class="block text-gray-700 focus:outline-none">
                    MENU &#9776;
                </button>
            </div>
        </div>
    </nav> --}}
    @include('frontend.nav')


    @yield('content')






    @include('frontend.footer')

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const menuOverlay = document.getElementById('menu-overlay');
        const closeMenu = document.getElementById('close-menu');

        menuBtn.addEventListener('click', () => {
            menuOverlay.classList.toggle('-translate-x-full');
        });

        closeMenu.addEventListener('click', () => {
            menuOverlay.classList.toggle('-translate-x-full');
        });
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

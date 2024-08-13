<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    <!--Custom CSS-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body class="">
    <!-- Navigation Bar -->
    <nav class="flex items-center justify-between p-4 bg-white shadow-md">
        <div class="text-lg font-semibold">CedarWorks</div>
        <div class="flex" >
            <div class="space-x-4 hidden md:flex mr-3">
                <a href="#" class="text-gray-700 uppercase">Outdoor</a>
                <a href="#" class="text-gray-700 uppercase">Indoor</a>
                <a href="#" class="text-gray-700 uppercase">How to Buy</a>
                {{-- <button id="menu-btn" class="block cursor-pointer focus:outline-none">MENU &#9776; </button> --}}
            </div>
            <div>
                <button id="menu-btn" class="block text-gray-700 focus:outline-none">
                    MENU &#9776;
                </button>
            </div>
        </div>
    </nav>



    <!-- Menu Overlay -->
    <div id="menu-overlay"
        class="fixed inset-x-0 top-0 h-3/4 bg-white transform -translate-x-full transition-transform duration-300 ease-in-out">
        <div class="p-4">
            <div class="menu-overlay-button">
                <div>
                    &nbsp;
                </div>
                <div>
                    <button id="close-menu" class="text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mt-4">
                <a href="#" class="block text-gray-700 mb-4">Outdoor</a>
                <a href="#" class="block text-gray-700 mb-4">Indoor</a>
                <a href="#" class="block text-gray-700 mb-4">How to Buy</a>
                <a href="#" class="block text-gray-700 mb-4">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="cart-area">

        <div>
            Commercial site
        </div>

        <div class="cart-wishlist">
            {{-- <div> --}}
            <p>Cart</p>
            {{-- </div> --}}
            {{-- <div> --}}
            <p>Wishlist</p>
            {{-- </div> --}}
        </div>

    </div>


    <!-- Hero Section -->
    <section class="hero">

        <div>
            <img style="height: 440px;"
                src="https://assets.telegraphindia.com/telegraph/2022/Dec/1670380679_new-project-2022-12-07t080748-004.jpg"
                alt="Playing Children">
        </div>
        <div class="hero-description ">
            <div>
                <p>Playful images here</p>
            </div>
            <div class="mt-5">
                <p class="text-6xl">Play is beautiful</p>

            </div>
            <div class="hero-buttons mt-10">
                <a href="#" id="hero-button1">Outdoor</a>
                <a href="#" id="hero-button2">Indoor</a>
            </div>
            <div class="mt-10 pt-4">
                <p class="uppercase">&#128269; Find my playset</p>
            </div>
        </div>

    </section>
    <section class="steps-to-play">
        <h2 class="uppercase text-4xl" id="steps-title">3 Steps to play </h2>
        <p class="mt-2">It's easy to get the perfect CedarWorks playset for your family, and you never have to leave the house.</p>
        <div class="steps">
            <div class="step-1">
                <h3>1. Choose It</h3>
                <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                <p>Choose, customize, or design online</p>
            </div>
            <div class="step-1">
                <h3>2. Buy It</h3>
                <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                <p>Choose, customize, or design online</p>
            </div>
            <div class="step-1">
                <h3>3. Get It</h3>
                <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                <p>Choose, customize, or design online</p>
            </div>
            <div class="step-1">
                <h3>Play!</h3>
                <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                <p>Choose, customize, or design online</p>
            </div>
        </div>
    </section>

    <hr>

    <section class=" text-center mt-10 mb-10">
        <h3 class="text-4xl">Cedaworks Playsets</h3>
        <div class="playsets">
            <div class="mr-10">
                From outdoor swing sets and playsets to indoor playsets, we design and manufacture the most beautiful, environmentally responsible products in the world for active play.
            </div>
            <div>
                <img src="{{ asset('images/triptych.svg') }}" alt="" srcset="">

            </div>
        </div>
    </section>

    <hr>

    <section class="premium-products mt-10 mb-10">
        <h3 id="premium-products-title" class="uppercase text-center"><span id="premium">Premium Products</span> • <span id="easy">Easy to Buy</span> • <span id="good">Good company</span></h3>
    </section>

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
</body>

</html>

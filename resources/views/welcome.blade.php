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
        <div class="flex">
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
                <p class="text-5xl">Play is</p>
                <p class="text-5xl">beautiful</p>

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
        <p class="mt-2">It's easy to get the perfect CedarWorks playset for your family, and you never have to leave
            the house.</p>
        <div class="steps">
            <div class="step-1">
                <h3 id="step-title" class="text-3xl">1. Choose It</h3>
                <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                <p id="step-description">Choose, customize, or design online</p>
            </div>
            <div class="step-1">
                <h3 id="step-title" class="text-3xl">2. Buy It</h3>
                <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                <p id="step-description">Choose, customize, or design online</p>
            </div>
            <div class="step-1">
                <h3 id="step-title" class="text-3xl">3. Get It</h3>
                <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                <p id="step-description">Choose, customize, or design online</p>
            </div>
            <div class="step-1">
                <h3 id="step-title" class="text-3xl">Play!</h3>
                <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                <p id="step-description">Choose, customize, or design online</p>
            </div>
        </div>
    </section>

    <hr>

    <section class=" text-center mt-10 mb-10">
        <h3 class="text-4xl">Cedaworks Playsets</h3>
        <div class="playsets">
            <div class="mr-10">
                From outdoor swing sets and playsets to indoor playsets, we design and manufacture the most beautiful,
                environmentally responsible products in the world for active play.
            </div>
            <div>
                <img src="{{ asset('images/triptych.svg') }}" alt="" srcset="">

            </div>
        </div>
    </section>

    <hr>

    <section class="premium-products mt-10 mb-10">
        <h3 id="premium-products-title" class="uppercase text-center"><span id="premium">Premium Products</span> •
            <span id="easy">Easy to Buy</span> •
        </h3>
        <h3 id="premium-products-title" class="uppercase text-center"><span id="good">Good company</span> </h3>

        <div class="premium">

            <div class="premium-description">
                <img src="{{ asset('images/premium.svg') }}" alt="">

                <h3 class="uppercase text-3xl">Premium Products</h3>
                <h2>The highest quality materials, construction, and design </h2>
                <ul>
                    <li>
                        Naturally splinter-free Northern White Cedar
                    </li>
                    <li>
                        Unwavering attention to detail
                    </li>
                    <li>
                        The most beautiful playsets you can buy
                    </li>
                </ul>
                <a href="#">Learn more about our premium products</a>

            </div>
            <div class="premium-image">

                <img style="height: 500px" src="{{ asset('images/premium-img.jpg') }}" alt=""
                    srcset="">

            </div>

        </div>
        <hr>
        <div class="easy-to-buy">

            <div class="easy-to-buy-image">
                <img style="height: 500px" src="{{ asset('images/easy-to-buy.jpg') }}" alt="">
            </div>
            <div class="easy-to-buy-description">
                <img src="{{ asset('images/marketing-point-2.svg') }}" alt="">
                <h3 class="uppercase text-3xl">easy to buy</h3>
                <h2>No worries. No stress. The modern way to buy a playset.</h2>

            </div>

        </div>
        <div class="good-company">
            <div class="good-company-description">
                <img src="{{ asset('images/marketing-point-3.svg') }}" alt="" srcset="">
                <h3 class="uppercase text-3xl">good company</h3>
                <h2>Family-owned, looking out for kids and the environment</h2>

            </div>
            <div class="good-company-image">
                <img style="height: 500px" src="{{ asset('images/goodcompany.jpg') }}" alt="">

            </div>

        </div>
    </section>

    <footer>
        <div class="footer-links">
            <div>
                <p class="text-2xl">
                    CedarWorks
                </p>
                <br>
                <p>
                    400 Nairobi Kenya
                </p>
                <p>
                    PO BOX 400
                </p>
                <p>
                    Nairobi Kenya
                </p>
                <br>
                <p>
                    (254) 79200 9556
                </p>
                <p>
                    (254) 79200 9556
                </p>
                <br>
                <p>
                    8:00 a.m - 4:00pm(EAT) Mon-Fri
                </p>
                <p>
                    9:00 a.m - 5:00pm(EAT) Sat-Sun
                </p>
            </div>
            <div>
                <p class="text-xl uppercase">Get Started</p>
                <br>
                <p>Find My Playset</p>
                <p>Request Catalog</p>
                <p>Contact Us</p>
                <p>Wishlist</p>
                <p>Product FAQ</p>
                <p>Blog</p>
                <p>Financing</p>
            </div>
            <div>
                <p class="text-xl uppercase">Outdooor</p>
                <br>
                <p>Rustic</p>
                <p>Classic</p>
                <p>Architectural</p>
                <p>Toys & Furniture</p>
                <p>Gift Certificates</p>

            </div>
            <div>
                <p class="text-xl uppercase">Indoor</p>
                <br>
                <p>Playsets</p>
                <p>Toys & Furniture</p>
            </div>
            <div>
                <p class="text-xl uppercase">Other Links</p>
                <br>
                <p>Accessories</p>
                <p>Service & Support</p>
                <p>Press & Media</p>
                <p>Design Your Own</p>
                <p>Navigator</p>
                <p>Careers</p>
                <p>Waranty</p>
                <p>My Account</p>
            </div>
        </div>
        <hr>
        <div class="footer-search-bar">
            <p class="uppercase text-center text-3xl">product search</p>
            <div class="search-box">
                <input type="text">
                <div class="divider"></div>
                <button id="clear">CLEAR</button>
            </div>
        </div>
    </footer>
    <section class="copyright">
        <div class="copyright-links">
            <p>Copyright &copy; PlayScapes 2024 </p>
            <p>Privacy Policy</p>
            <p>Facebook</p>
            <p>Instagram</p>
        </div>
        <div>
            &nbsp; 
        </div>
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

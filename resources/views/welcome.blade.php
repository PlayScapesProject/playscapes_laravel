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
    <nav class="flex items-center justify-between p-4 bg-white shadow-md">
        <div class="text-lg font-semibold">Playscapes</div>
        <div class="flex">
            <div class="space-x-4 hidden md:flex mr-3 relative">
                <!-- Outdoor Dropdown -->
                <div class="group inline-block relative">
                    <a href="#" class="text-gray-700 uppercase">Outdoor</a>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md">
                        <ul class="py-2">
                            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">All
                                    Outdoor</a></li>
                            <li><a href="#"
                                    class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Architectural</a></li>
                            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Classic</a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- Indoor Dropdown --}}
                <div class="group inline-block relative">
                    <a href="#" class="text-gray-700 uppercase">Indoor</a>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md">
                        <ul class="py-2">
                            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">All Indoor</a>
                            </li>
                            <li><a href="#"
                                    class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Architectural</a></li>
                            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Classic</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <a href="#" class="text-gray-700 uppercase">Indoor</a>
                <a href="#" class="text-gray-700 uppercase">How to Buy</a>
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
            <div style="margin-right: 10px">
                <svg height="20" width="20" stroke-width="1" color="#61bebe" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="currentColor"
                    class="icon icon-tabler icons-tabler-filled icon-tabler-shopping-cart">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M6 2a1 1 0 0 1 .993 .883l.007 .117v1.068l13.071 .935a1 1 0 0 1 .929 1.024l-.01 .114l-1 7a1 1 0 0 1 -.877 .853l-.113 .006h-12v2h10a3 3 0 1 1 -2.995 3.176l-.005 -.176l.005 -.176c.017 -.288 .074 -.564 .166 -.824h-5.342a3 3 0 1 1 -5.824 1.176l-.005 -.176l.005 -.176a3.002 3.002 0 0 1 1.995 -2.654v-12.17h-1a1 1 0 0 1 -.993 -.883l-.007 -.117a1 1 0 0 1 .883 -.993l.117 -.007h2zm0 16a1 1 0 1 0 0 2a1 1 0 0 0 0 -2zm11 0a1 1 0 1 0 0 2a1 1 0 0 0 0 -2z">
                    </path>
                </svg>

            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" width="19" height="19" stroke-width="1.2" stroke="red">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                </svg>
            </div>

        </div>

    </div>


    <!-- Hero Section -->
    <section class="hero">

        <div>
            <img style="height: 440px;"
                src="https://assets.telegraphindia.com/telegraph/2022/Dec/1670380679_new-project-2022-12-07t080748-004.jpg"
                alt="Playing Children">
        </div>
        <div class="hero-description">
            <div id="playful-img">
                <img style="width: 160px" src="{{ asset('images/triptych.svg') }}" alt="" srcset="">
            </div>
            <div class="mt-5">
                <p class="text-5xl">Play is</p>
                <p class="text-5xl">beautiful</p>

            </div>
            <div class="hero-buttons mt-10">
                <button id="hero-button1">Outdoor</button>
                <button id="hero-button2">Indoor</button>
            </div>
            <div class="mt-10 pt-4 find-my-playlist">
                <div style="margin-right: 3px">
                    <svg width="26" height="26" stroke-width="1.0" color="#388888"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                        <path d="M21 21l-6 -6"></path>
                    </svg>
                </div>
                <div>
                    <p class="uppercase text-2xl">Find my playset</p>
                </div>
            </div>
        </div>

    </section>
    <div class="custom-container">

        <section class="steps-to-play-desktop">
            <h2 class="uppercase text-4xl" id="steps-title">3 Steps to play </h2>
            <p class="mt-2">It's easy to get the perfect CedarWorks playset for your family, and you never have to
                leave
                the house.</p>
            <div class="steps-desktop">
                <div class="step-1-desktop">
                    <h3 id="step-title-desktop" class="text-3xl">1. Choose It</h3>
                    <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                    <p id="step-description-desktop">Choose, customize, or design online</p>
                </div>
                <div class="step-1-desktop">
                    <h3 id="step-title-desktop" class="text-3xl">2. Buy It</h3>
                    <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                    <p id="step-description-desktop">Choose, customize, or design online</p>
                </div>
                <div class="step-1-desktop">
                    <h3 id="step-title-desktop" class="text-3xl">3. Get It</h3>
                    <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                    <p id="step-description-desktop">Choose, customize, or design online</p>
                </div>
                <div class="step-1-desktop">
                    <h3 id="step-title-desktop" class="text-3xl">Play!</h3>
                    <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                    <p id="step-description-desktop">Choose, customize, or design online</p>
                </div>
            </div>
        </section>
        <section class="steps-to-play md:hidden">
            <h2 class="uppercase text-4xl" id="steps-title">3 Steps to play</h2>
            <p class="mt-2">It's easy to get the perfect CedarWorks playset for your family, and you never have to
                leave
                the house.</p>
            <div class="steps-carousel ">
                <div class="carousel-container">
                    <div class="step">
                        <h3 id="step-title" class="text-3xl">1. Choose It</h3>
                        <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                        <p id="step-description">Choose, customize, or design online</p>
                    </div>
                    <div class="step">
                        <h3 id="step-title" class="text-3xl">2. Buy It</h3>
                        <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                        <p id="step-description">Choose, customize, or design online</p>
                    </div>
                    <div class="step">
                        <h3 id="step-title" class="text-3xl">3. Get It</h3>
                        <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                        <p id="step-description">Choose, customize, or design online</p>
                    </div>
                    <div class="step">
                        <h3 id="step-title" class="text-3xl">Play!</h3>
                        <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                        <p id="step-description">Choose, customize, or design online</p>
                    </div>
                </div>
                <div class="carousel-dots">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                </div>
            </div>
        </section>


        <hr>

        <section class="playsets-section text-center mt-10 mb-10">
            <h3 class="text-5xl">Cedaworks Playsets</h3>
            <div class="playsets">
                <div class="playsets-description">
                    From outdoor <span id="redirect-link"><a href="">swing sets and playsets</a></span> to
                    <span id="redirect-link"><a href="">indoor playsets</a></span> , we design and manufacture
                    the most
                    beautiful,
                    environmentally responsible products in the world for active play.
                </div>
                <div class="playsets-image">
                    <img id="playsets-img" src="{{ asset('images/triptych.svg') }}" alt="" srcset="">

                </div>
            </div>
        </section>

        <hr>

        <section class="premium-products mt-10 mb-10">
            <h3 id="premium-products-title" class="uppercase text-center"><span id="premium">Premium
                    Products</span> •
                <span id="easy">Easy to Buy</span> •
            </h3>
            <h3 id="premium-products-title" class="uppercase text-center"><span id="good">Good company</span>
            </h3>

            <div class="premium">

                <div class="premium-description">
                    <img style="width: 100px;color:#357f7e;" src="{{ asset('images/premium.svg') }}" alt="">

                    <div class="premium-text">
                        <h3 class="uppercase text-3xl">Premium Products</h3>
                        <h2>The highest quality materials, construction, and design</h2>
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

                    </div>
                    <a style="margin-top: 5px" href="#"> <span id="premium-link">Learn more about our premium
                            products</span> </a>

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
                    <img style="width: 100px" src="{{ asset('images/marketing-point-2.svg') }}" alt="">
                    <div class="easy-to-buy-text">
                        <h3 class="uppercase text-3xl">easy to buy</h3>
                        <h2>No worries. No stress. The modern way to buy a playset.</h2>
                        <ul>
                            <li>Buy from home — online or by phone</li>
                            <li>
                                Customize and get exactly what you want
                            </li>
                            <li>
                                Delivery and assembly from coast to coast
                            </li>
                        </ul>
                    </div>
                    <a href="#"> <span id="premium-link">Learn more about how easy it is to buy</span> </a>

                </div>

            </div>
            <hr>
            <div class="good-company">
                <div class="good-company-description">
                    <img style="width: 100px" src="{{ asset('images/marketing-point-3.svg') }}" alt=""
                        srcset="">
                    <div class="good-company-text">
                        <h3 class="uppercase text-3xl">good company</h3>
                        <h2>Family-owned, looking out for kids and the environment</h2>
                        <ul>
                            <li>
                                Earth-friendly, kid-friendly materials
                            </li>
                            <li>
                                10% to kids and the environment
                            </li>
                            <li>
                                Made in Maine
                            </li>
                        </ul>

                    </div>
                    <a href="#"> <span id="premium-link">Learn more about what our company is doing</span> </a>

                </div>
                <div class="good-company-image">
                    <img style="height: 500px" src="{{ asset('images/goodcompany.jpg') }}" alt="">

                </div>

            </div>
        </section>

        <section class="premium-products-mobile mt-10 mb-10">
            <h3 class="text-3xl">Why</h3>
            <h3 class="text-3xl">Cedaworks?</h3>
            <div class="carousel-premium">
                <div class="carousel-slide-premium premium-mobile">
                    <div class="premium-description-mobile">
                        <img style="width: 80px" src="{{ asset('images/premium.svg') }}" alt="">
                        <h3 class="uppercase text-3xl">Premium Products</h3>
                        <h2>The highest quality materials, construction, and design</h2>
                        <ul>
                            <li>Naturally splinter-free Northern White Cedar</li>
                            <li>Unwavering attention to detail</li>
                            <li>The most beautiful playsets you can buy</li>
                        </ul>
                        <a href="#">Learn more about our premium products</a>
                    </div>
                    {{-- <div class="premium-image-mobile">
                    <img style="height: 500px" src="{{ asset('images/premium-img.jpg') }}" alt="">
                </div> --}}
                </div>

                <div class="carousel-slide-premium easy-to-buy-mobile">
                    {{-- <div class="easy-to-buy-image-premium">
                    <img style="height: 500px" src="{{ asset('images/easy-to-buy.jpg') }}" alt="">
                </div> --}}
                    <div class="easy-to-buy-description-premium">
                        <img style="width: 80px" src="{{ asset('images/marketing-point-2.svg') }}" alt="">
                        <h3 class="uppercase text-3xl">easy to buy</h3>
                        <h2>No worries. No stress. The modern way to buy a playset.</h2>
                        <ul>
                            <li>Naturally splinter-free Northern White Cedar</li>
                            <li>Unwavering attention to detail</li>
                            <li>The most beautiful playsets you can buy</li>
                        </ul>
                        <a href="#">Learn more about our premium products</a>
                    </div>
                </div>

                <div class="carousel-slide-premium good-company-mobile">
                    <div class="good-company-description-mobile">
                        <img style="width: 80px" src="{{ asset('images/marketing-point-3.svg') }}" alt="">
                        <h3 class="uppercase text-3xl">good company</h3>
                        <h2>Family-owned, looking out for kids and the environment</h2>
                        <ul>
                            <li>Naturally splinter-free Northern White Cedar</li>
                            <li>Unwavering attention to detail</li>
                            <li>The most beautiful playsets you can buy</li>
                        </ul>
                        <a href="#">Learn more about our premium products</a>
                    </div>
                    {{-- <div class="good-company-image-premium">
                    <img style="height: 500px" src="{{ asset('images/goodcompany.jpg') }}" alt="">
                </div> --}}
                </div>
            </div>

            <!-- Navigation Dots -->
            <div class="carousel-dots-mobile">
                <span class="dot-mobile" data-slide="0"></span>
                <span class="dot-mobile" data-slide="1"></span>
                <span class="dot-mobile" data-slide="2"></span>
            </div>
        </section>
        <hr class="last-hr">

    </div>

    <section class="who-we-are">
        <p class="text-3xl">
            Who We Are

        </p>
        <div class="who-we-are-img">
            <img src="{{ asset('images/triptych.svg') }}" alt="" srcset="">
        </div>
        <div>
            <p class="">
                From outdoor <span id="premium-link">swing sets and playsets</span> to <span id="premium-link">indoor
                    playsets</span>, we design and manufacture the most beautiful,
                environmentally responsible products in the world for active play.
            </p>
        </div>
    </section>






    <footer class="footer-desktop">
        <div class="footer-desktop-links">
            <div>
                <p class="text-2xl">
                    Playscapes
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
        <div class="footer-desktop-search-bar">
            <p class="uppercase text-center text-3xl">product search</p>
            <div class="search-box">
                <input style="outline:none" type="text">
                <div class="divider"></div>
                <button id="clear">CLEAR</button>
            </div>
        </div>
    </footer>
    {{-- Footer Mobile --}}
    <footer class="footer-mobile">
        <div class="footer-mobile-links">
            <div>
                <p class="text-2xl">
                    Playscapes
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
            <div class="get-started-outdoor">
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
            </div>
            <div class="indoor-other-links">
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

        </div>
        <hr>
        <div class="footer-mobile-search-bar">
            <p class="uppercase text-center text-3xl mb-4">product search</p>
            <div class="search-box-mobile">
                <input style="outline:none" type="text">
                {{-- <div class="divider"></div> --}}
                <button id="clear-mobile">CLEAR</button>
            </div>
        </div>
    </footer>
    {{-- End Footer Mobile --}}
    <section class="copyright">
        <div class="copyright-links">
            <div>
                <p>Copyright &copy; PlayScapes 2024 </p>
            </div>
            <div>
                <p>Privacy Policy</p>
            </div>
            <div class="facebook-instagram">
                <div>
                    <svg color="#ffffff" stroke-width="1.2" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                    </svg>
                </div>
                <div>
                    <svg color="#ffffff" stroke-width="1.2" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                        <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M16.5 7.5l0 .01"></path>
                    </svg>
                </div>

            </div>
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

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

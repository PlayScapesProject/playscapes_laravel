@extends('frontend.main')

@section('content')
    {{-- <div class="cart-area">

        <div>
            Home
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

    </div> --}}
    <!-- Hero Section -->
    {{-- <section class="hero">

        <div class="hero-image">
            <img style="object-fit: cover;height:100%"  src="{{ asset('images/heross.png') }}" alt="Playing Children">
        </div>
        <div class="hero-description">
            <div id="playful-img">
                <img style="width: 160px" src="{{ asset('images/triptych.svg') }}" alt="" srcset="">
            </div>
            <div class="mt-5">
                <p class="text-5xl">Play with</p>
                <p class="text-5xl">Playscapes KE</p>

            </div>
            <div class="hero-buttons mt-10">
                <a href="{{ route('gallery') }}" id="hero-button1">Gallery</a>
                <a href="{{ route('contact') }}" id="hero-button2">Contact</a>
            </div>
            <div class="hero-buttons-mobile mt-10">
                <a href="{{ route('gallery') }}" id="hero-button1-mobile">Gallery</a>
                <a href="{{ route('contact') }}" id="hero-button2-mobile">Contact</a>
            </div>
            <div class="mt-10 pt-4 find-my-playlist">
                <div style="margin-right: 3px">
                    <svg width="26" height="26" stroke-width="1.0" color="#388888" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                        <path d="M21 21l-6 -6"></path>
                    </svg>
                </div>
                <div>
                    <p class="uppercase text-2xl"><a href="{{ route('gallery') }}">Find my playset</a></p>
                </div>
            </div>
        </div>

    </section> --}}
    {{-- <section class="landing">
        <div class="landing-image">
            <img style="object-fit: cover;height:100%"  src="{{ asset('images/heross.png') }}" alt="Playing Children">
        </div>
        <div class="landing-description">
            <div id="playful-img">
                <img style="width: 160px" src="{{ asset('images/triptych.svg') }}" alt="" srcset="">
            </div>
            <div class="mt-5">
                <p class="text-5xl">Play with</p>
                <p class="text-5xl">Playscapes KE</p>

            </div>
            <div class="hero-buttons mt-10">
                <a href="{{ route('gallery') }}" id="hero-button1">Gallery</a>
                <a href="{{ route('contact') }}" id="hero-button2">Contact</a>
            </div>
            <div class="hero-buttons-mobile mt-10">
                <a href="{{ route('gallery') }}" id="hero-button1-mobile">Gallery</a>
                <a href="{{ route('contact') }}" id="hero-button2-mobile">Contact</a>
            </div>
            <div class="mt-10 pt-4 find-my-playlist">
                <div style="margin-right: 3px">
                    <svg width="26" height="26" stroke-width="1.0" color="#388888" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                        <path d="M21 21l-6 -6"></path>
                    </svg>
                </div>
                <div>
                    <p class="uppercase text-2xl"><a href="{{ route('gallery') }}">Find my playset</a></p>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="landing">
        <div class="landing-image">
            <img style="object-fit: cover; width: 100%; height: 100%;" src="{{ asset('images/heross.png') }}" alt="Playing Children">
        </div>
        <div class="landing-description">
            <div id="playful-img">
                <img style="width: 160px" src="{{ asset('images/triptych.svg') }}" alt="" srcset="">
            </div>
            <div class="mt-5">
                <p class="text-5xl">Play with</p>
                <p class="text-5xl">Playscapes KE</p>
            </div>
            <div class="hero-buttons mt-10">
                <a href="{{ route('gallery') }}" id="hero-button1">Gallery</a>
                <a href="{{ route('contact') }}" id="hero-button2">Contact</a>
            </div>
            <div class="hero-buttons-mobile mt-10">
                <a href="{{ route('gallery') }}" id="hero-button1-mobile">Gallery</a>
                <a href="{{ route('contact') }}" id="hero-button2-mobile">Contact</a>
            </div>
            <div class="mt-10 pt-4 find-my-playlist">
                <div style="margin-right: 3px">
                    <svg width="26" height="26" stroke-width="1.0" color="#388888" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                        <path d="M21 21l-6 -6"></path>
                    </svg>
                </div>
                <div>
                    <p style="font-size:19px" class="uppercase"><a href="{{ route('gallery') }}">Find my playset</a></p>
                </div>
            </div>
        </div>
    </section>

    <div class="custom-container">

        <section class="steps-to-play-desktop">
            <h2 style="font-size: 38px;color: #1baad880;" class="uppercase" id="">3 Steps to play </h2>
            <p style="font-size: 19px;margin-bottom:30px" class="">It's easy to get the perfect Playscapes playset for your family, and you never have to
                leave
                the house.</p>
            <div class="steps-desktop">
                <div class="step-1-desktop">
                    <h3 id="" class="">1. Choose It</h3>
                    <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                    <p id="step-description-desktop">Choose a playset design you prefer </p>
                </div>
                <div class="step-1-desktop">
                    <h3 id="" class="">2. Buy It</h3>
                    <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                    <p id="step-description-desktop">Order online or by phone</p>
                </div>
                <div class="step-1-desktop">
                    <h3 id="" class="">3. Get It</h3>
                    <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                    <p id="step-description-desktop">We deliver countrywide to your destination</p>
                </div>
                <div class="step-1-desktop">
                    <h3 id="" class="">Play!</h3>
                    <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                    <p id="step-description-desktop">Play!</p>
                </div>
            </div>
        </section>
        <section class="steps-to-play md:hidden">
            <h2 style="font-size: 38px;color: #1baad880;" class="uppercase" id="">3 Steps to play</h2>
            <p style="font-size: 19px;margin-bottom:30px" class="">It's easy to get the perfect playset for your family, and you never have to
                leave
                the house.</p>
            <div class="steps-carousel">
                <div class="carousel-container">
                    <div class="step">
                        <h3 id="" class="">1. Choose It</h3>
                        <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                        <p id="step-description">Choose a playset design you prefer</p>
                    </div>
                    <div class="step">
                        <h3 id="" class="">2. Buy It</h3>
                        <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                        <p id="step-description">Order online or by phone</p>
                    </div>
                    <div class="step">
                        <h3 id="" class="">3. Get It</h3>
                        <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                        <p id="step-description">We deliver countrywide to your destination</p>
                    </div>
                    <div class="step">
                        <h3 id="" class="">Play!</h3>
                        <img src="{{ asset('images/choose.png') }}" alt="Choose it">
                        <p id="step-description">Play!</p>
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
            <h3 style="color: #00000090;font-size:50px;margin:40px 0px;" class="">Playscapes Playsets</h3>
            <div class="playsets">
                <div class="playsets-description">
                    We create <span id="redirect-link"><a href="">high-quality, safe</a></span> and
                    <span id="redirect-link"><a href="">fun</a></span> play equipment to transform any outdoor
                    space into an adventure zone. So what are you waiting for? Escape outside with us, and let the adventures begin!
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

                    <div class="premium-text space-y-5">
                        <h3 style="color: #1baad8;font-size:38px;margin-top:40px;" class="uppercase">Premium Products</h3>
                        <h2 style="font-size: 19px">The highest quality materials, construction, and design</h2>
                        <ul style="list-style-type: disc;margin-left:20px;font-size:19px">
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
                    <a style="margin-top: 5px;font-size:19px;" href="#"> <span id="premium-link">Learn more about our premium
                            products</span> </a>

                </div>
                <div class="premium-image">

                    <img style="height: 500px" src="{{ asset('images/WhatsApp Image 2024-08-19 at 10.18.40 AM.jpeg') }}" alt=""
                        srcset="">

                </div>

            </div>
            <hr>
            <div class="easy-to-buy">

                <div class="easy-to-buy-image">
                    <img style="height: 500px" src="{{ asset('images/WhatsApp Image 2024-08-19 at 10.18.42 AM (1).jpeg') }}" alt="">
                </div>
                <div class="easy-to-buy-description">
                    <img style="width: 100px" src="{{ asset('images/untitled.svg') }}" alt="">
                    <div class="easy-to-buy-text space-y-5">
                        <h3 style="color: #f2b21d;font-size:38px;margin-top:40px;" class="uppercase">easy to buy</h3>
                        <h2 style="font-size:19px;">No worries. No stress. The modern way to buy a playset.</h2>
                        <ul style="list-style-type: disc;margin-left:20px;font-size:19px;">
                            <li>Buy from home — online or by phone</li>
                            <li>
                                Customize and get exactly what you want
                            </li>
                            <li>
                                Delivery and assembly from coast to coast
                            </li>
                        </ul>
                    </div>
                    <a style="font-size: 19px;" href="#"> <span id="premium-link">Learn more about how easy it is to buy</span> </a>

                </div>

            </div>
            <hr>
            <div class="good-company">
                <div class="good-company-description">
                    <img style="width: 100px" src="{{ asset('images/marketing-point-3.svg') }}" alt=""
                        srcset="">
                    <div class="good-company-text space-y-5">
                        <h3 style="color: #98b357;font-size:38px;margin-top:40px;" class="uppercase ">good company</h3>
                        <h2 style="font-size:19px">Family-owned, looking out for kids and the environment</h2>
                        <ul style="list-style-type: disc;margin-left:20px;font-size:19px">
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
                    <a style="font-size: 19px" href="#"> <span id="premium-link">Learn more about what our company is doing</span> </a>

                </div>
                <div class="good-company-image">
                    <img style="height: 500px" src="{{ asset('images/WhatsApp Image 2024-08-19 at 10.18.40 AM (1).jpeg') }}" alt="">

                </div>

            </div>
        </section>

        <section class="premium-products-mobile mt-10 mb-10">
            <h3 style="font-size:32px;margin-top:40px;margin-bottom:40px" class="">Why Playscapes KE?</h3>
            <div class="carousel-premium">
                <div class="carousel-slide-premium premium-mobile">
                    <div class="premium-description-mobile mt-1 space-y-3">
                        <img style="width: 80px" src="{{ asset('images/premium.svg') }}" alt="">
                        <h3 style="color: #1baad8;font-size:28px" class="uppercase">Premium Products</h3>
                        <h2 style="font-size: 19px">The highest quality materials, construction, and design</h2>
                        <ul style="list-style-type: disc;font-size:19px">
                            <li>Naturally splinter-free Northern White Cedar</li>
                            <li>Unwavering attention to detail</li>
                            <li>The most beautiful playsets you can buy</li>
                        </ul>
                        {{-- <a style="font-size: 19px" href="#">Learn more about our premium products</a> --}}
                    </div>
                    {{-- <div class="premium-image-mobile">
                <img style="height: 500px" src="{{ asset('images/premium-img.jpg') }}" alt="">
            </div> --}}
                </div>

                <div class="carousel-slide-premium easy-to-buy-mobile">
                    {{-- <div class="easy-to-buy-image-premium">
                <img style="height: 500px" src="{{ asset('images/easy-to-buy.jpg') }}" alt="">
            </div> --}}
                    <div class="easy-to-buy-description-premium mt-1  space-y-3">
                        <img style="width: 80px" src="{{ asset('images/untitled.svg') }}" alt="">
                        <h3 style="color: #f2b21d;font-size:28px" class="uppercase">easy to buy</h3>
                        <h2 style="font-size: 19px">No worries. No stress. The modern way to buy a playset.</h2>
                        <ul style="list-style-type: disc;font-size:19px">
                            <li>Naturally splinter-free Northern White Cedar</li>
                            <li>Unwavering attention to detail</li>
                            <li>The most beautiful playsets you can buy</li>
                        </ul>
                        {{-- <a href="#">Learn more about our premium products</a> --}}
                    </div>
                </div>

                <div class="carousel-slide-premium good-company-mobile">
                    <div class="good-company-description-mobile mt-1  space-y-3">
                        <img style="width: 80px" src="{{ asset('images/marketing-point-3.svg') }}" alt="">
                        <h3 style="color: #98b357;font-size:28px" class="uppercase ">good company</h3>
                        <h2 style="font-size:19px">Family-owned, looking out for kids and the environment</h2>
                        <ul style="list-style-type: disc;font-size:19px">
                            <li>Naturally splinter-free Northern White Cedar</li>
                            <li>Unwavering attention to detail</li>
                            <li>The most beautiful playsets you can buy</li>
                        </ul>
                        {{-- <a href="#">Learn more</a> --}}
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
        <p style="font-size:32px;margin-bottom:40px" class="">
            Who We Are

        </p>
        <div class="who-we-are-img">
            <img  src="{{ asset('images/triptych.svg') }}" alt="" srcset="">
        </div>
        <div>
            <p style="font-size:19px;margin-top:30px;margin-bottom:30px" class="">
                From outdoor <span id="premium-link">swing sets and playsets</span> to <span id="premium-link">indoor
                    playsets</span>, we design and manufacture the most beautiful,
                environmentally responsible products in the world for active play.
            </p>
        </div>
    </section>
@endsection

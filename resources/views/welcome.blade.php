@extends('frontend.main')

@section('content')
    <section class="landing">
        <div class="landing-image">
            <img id="landing-image" style="object-fit: cover; width: 100%;" src="{{ asset('images/playsets/image-08.jpg') }}"
                alt="Playing Children">
        </div>
        <div class="landing-description">
            <div id="playful-img">
                <img style="width: 160px" src="{{ asset('images/loko-nobg.png') }}" alt="" srcset="">
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
                    <svg width="26" height="26" stroke-width="1.0" color="#EE4B2B99"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                        <path d="M21 21l-6 -6"></path>
                    </svg>
                </div>
                <div>
                    <p style="font-size:19px;" class="uppercase"><a href="{{ route('gallery') }}">Find my playset</a></p>
                </div>
            </div>
        </div>
    </section>

    <div class="custom-container">

        <section class="steps-to-play-desktop">
            <h2 style="font-size: 38px;color: #EE4B2B99;" class="uppercase" id="">3 Steps to play </h2>
            <p style="font-size: 19px;margin-bottom:30px" class="">It's easy to get the perfect Playscapes playset for
                your family, and you never have to
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
            <h2 style="font-size: 38px;color: #EE4B2B99;" class="uppercase" id="">3 Steps to play</h2>
            <p style="font-size: 19px;margin-bottom:30px" class="">It's easy to get the perfect playset for your
                family, and you never have to
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
            <h3 style="color: #EE4B2B99;font-size:50px;margin:40px 0px;" class="">Playscapes Playsets</h3>
            <div class="playsets">
                <div class="playsets-description">
                    We create <span id="redirect-link"><a href="">high-quality, safe</a></span> and
                    <span id="redirect-link"><a href="">fun</a></span> play equipment to transform any outdoor
                    space into an adventure zone. So what are you waiting for? Escape outside with us, and let the
                    adventures begin!
                </div>
                <div class="playsets-image">
                    <img style="height: 150px" id="playsets-img" src="{{ asset('images/loko-nobg.png') }}"
                        alt="" srcset="">

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
                    <img style="width: 100px;color:#357f7e;" src="{{ asset('images/premium1.svg') }}" alt="">

                    <div class="premium-text space-y-5">
                        <h3 style="color: #4a6741;font-size:38px;margin-top:40px;" class="uppercase">Premium Products</h3>
                        <h2 style="font-size: 19px">The highest quality materials, construction, and design</h2>
                        <ul style="list-style-type: disc;margin-left:20px;font-size:19px">
                            <li>
                                Pressure treated poles
                            </li>
                            <li>
                                Mix of steel and wood
                            </li>
                            <li>
                                Unwavering attention to detail
                            </li>
                            <li>
                                The Safe beautiful enchanting playsets you can buy
                            </li>
                        </ul>

                    </div>
                    <a style="margin-top: 5px;font-size:19px;" href="#"> <span id="premium-link">Learn more about
                            our premium
                            products</span> </a>

                </div>
                <div class="premium-image">

                    <img style="height: 500px" src="{{ asset('images/playsets/image-24.jpg') }}"
                        alt="" srcset="">

                </div>

            </div>
            <hr>
            <div class="easy-to-buy">

                <div class="easy-to-buy-image">
                    <img style="height: 500px"
                        src="{{ asset('images/WhatsApp Image 2024-08-19 at 10.18.42 AM (1).jpeg') }}" alt="">
                </div>
                <div class="easy-to-buy-description">
                    <img style="width: 100px" src="{{ asset('images/untitled.svg') }}" alt="">
                    <div class="easy-to-buy-text space-y-5">
                        <h3 style="color: #EE4B2B;font-size:38px;margin-top:40px;" class="uppercase">easy to buy</h3>
                        <h2 style="font-size:19px;">No worries. No stress. The modern way to buy a playset.</h2>
                        <ul style="list-style-type: disc;margin-left:20px;font-size:19px;">
                            <li>Choose a playset design</li>
                            <li>Order online or by phone</li>
                            <li>We deliver to your destination</li>
                        </ul>
                    </div>
                    <a style="font-size: 19px;" href="#"> <span id="premium-link">Learn more about how easy it is
                            to buy</span> </a>

                </div>

            </div>
            <hr>
            <div class="good-company">
                <div class="good-company-description">
                    <img style="width: 100px" src="{{ asset('images/marketing-point-4.svg') }}" alt=""
                        srcset="">
                    <div class="good-company-text space-y-5">
                        <h3 style="color: #36494F;font-size:38px;margin-top:40px;" class="uppercase ">good company</h3>
                        <h2 style="font-size:19px">Family-owned, looking out for kids and the environment</h2>
                        <ul style="list-style-type: disc;margin-left:20px;font-size:19px">
                            <li>Family-owned, looking out for kids and the environment</li>
                            <li>Earth-friendly, kid-friendly materials</li>
                            <li>Made in Kenya</li>
                        </ul>

                    </div>
                    <a style="font-size: 19px" href="#"> <span id="premium-link">Learn more about what our company
                            is doing</span> </a>

                </div>
                <div class="good-company-image">
                    <img style="height: 500px"
                        src="{{ asset('images/WhatsApp Image 2024-08-19 at 10.18.40 AM (1).jpeg') }}" alt="">

                </div>

            </div>
        </section>

        <section class="premium-products-mobile mt-10 mb-10">
            <h3 style="font-size:32px" class="">Why Playscapes KE?</h3>
            <div class="carousel-premium">
                <div class="carousel-slide-premium premium-mobile">
                    <div class="premium-description-mobile mt-1 space-y-3">
                        <img style="width: 80px" src="{{ asset('images/premium1.svg') }}" alt="">
                        <h3 style="color: #4a6741;font-size:28px" class="uppercase">Premium Products</h3>
                        <h2 style="font-size: 19px">The highest quality materials, construction, and design</h2>
                        <ul style="list-style-type: disc;font-size:19px">
                            <li>
                                Pressure treated poles
                            </li>
                            <li>
                                Mix of steel and wood
                            </li>
                            <li>
                                Unwavering attention to detail
                            </li>
                            <li>
                                The Safe beautiful enchanting playsets you can buy
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="carousel-slide-premium easy-to-buy-mobile">

                    <div class="easy-to-buy-description-premium mt-1  space-y-3">
                        <img style="width: 80px" src="{{ asset('images/untitled.svg') }}" alt="">
                        <h3 style="color: #EE4B2B;font-size:28px" class="uppercase">easy to buy</h3>
                        <h2 style="font-size: 19px">No worries. No stress. The modern way to buy a playset.</h2>
                        <ul style="list-style-type: disc;font-size:19px">
                            <li>Choose a playset design</li>
                            <li>Order online or by phone</li>
                            <li>We deliver to your destination</li>
                        </ul>
                    </div>
                </div>

                <div class="carousel-slide-premium good-company-mobile">
                    <div class="good-company-description-mobile mt-1  space-y-3">
                        <img style="width: 80px" src="{{ asset('images/marketing-point-4.svg') }}" alt="">
                        <h3 style="color: #36494F;font-size:28px" class="uppercase ">good company</h3>
                        <h2 style="font-size:19px">Family-owned, looking out for kids and the environment</h2>
                        <ul style="list-style-type: disc;font-size:19px">
                            <li>Family-owned, looking out for kids and the environment</li>
                            <li>Earth-friendly, kid-friendly materials</li>
                            <li>Made in Kenya</li>
                        </ul>
                    </div>

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
        <p style="font-size:32px;margin-bottom:40px;color:#EE4B2B99" class="">
            Who We Are

        </p>
        <div class="who-we-are-img">
            <img style="width: 50%;margin-left:auto;margin-right:auto" src="{{ asset('images/loko-nobg.png') }}"
                alt="" srcset="">
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

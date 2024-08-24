@extends('frontend.main')

@section('content')
    <div class="cart-area">

        <div>
            <a href="{{ route('home') }}">Home</a> / About Us
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
    <div class="about-us-container">
        <!-- Hero Section -->
        <section class="hero-about-us">

            <div class="hero-about-us-img">
                <img src="https://assets.telegraphindia.com/telegraph/2022/Dec/1670380679_new-project-2022-12-07t080748-004.jpg"
                    alt="Playing Children">
            </div>
            <div class="hero-description-about-us">
                <h1 class="text-4xl">Who we are</h1>
                <p class="mt-5 her">
                    At CedarWorks we come from a variety of backgrounds and from all over the country (and even beyond),
                    but we are all lucky enough to live in a place as beautiful as Maine and to do what we love. We
                    think you’ll love what we do, too.

                </p>
            </div>

        </section>
        <hr class="mt-10">


        <section class="about-what-we-sell">
            <div class="about-what-we-sell-description">
                <h2 class="text-4xl">What we sell</h2>
                <p class="">
                    From outdoor swing sets and playsets to indoor
                    playsets, we design and manufacture the most beautiful,
                    environmentally responsible products in the world for active play.
                </p>
                <a href="" class="uppercase" id="view-gallery-btn">View Gallery</a>
            </div>
            <div class="">
                <img src="https://assets.telegraphindia.com/telegraph/2022/Dec/1670380679_new-project-2022-12-07t080748-004.jpg"
                    alt="" srcset="">
                <a href="" class="uppercase" id="view-gallery-btn-mobile">View Gallery</a>
            </div>
        </section>
    </div>
@endsection

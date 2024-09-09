<nav class="flex items-center navigatio-menu justify-between p-4 bg-white ">
    <div class="text-lg uppercase font-semibold"><a href="{{ route('home') }}">Playscapes</a></div>
    <div class="flex">
        <div class="space-x-10 font-bold  hidden md:flex mr-3 relative">
            <!-- Outdoor Dropdown -->
            <div class="group inline-block relative">
                <a href="{{ route('about') }}" class=" uppercase">About us</a>
                {{-- <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md">
                    <ul class="py-2">
                        <li><a href="#" class="block px-4 py-2  hover:bg-gray-200">All
                                Outdoor</a></li>
                        <li><a href="#"
                                class="block px-4 py-2  hover:bg-gray-200">Architectural</a></li>
                        <li><a href="#" class="block px-4 py-2  hover:bg-gray-200">Classic</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
            {{-- Indoor Dropdown --}}
            <div class="group inline-block relative">
                <a href="{{ route('gallery') }}" class=" uppercase">Gallery</a>
                {{-- <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md">
                    <ul class="py-2">
                        <li><a href="#" class="block px-4 py-2  hover:bg-gray-200">All Indoor</a>
                        </li>
                        <li><a href="#"
                                class="block px-4 py-2  hover:bg-gray-200">Architectural</a></li>
                        <li><a href="#" class="block px-4 py-2  hover:bg-gray-200">Classic</a>
                        </li>
                    </ul>
                </div> --}}
            </div>

            {{-- <a href="#" class=" uppercase">How to Buy</a> --}}
            <a href="{{ route('contact') }}" class=" uppercase">contact us</a>
        </div>
        <div>
            <button id="menu-btn" class="block font-bold  focus:outline-none">
                MENU &#9776;
            </button>
        </div>
    </div>
</nav>




<!-- Menu Overlay -->
<div id="menu-overlay"
    class="fixed inset-x-0 top-0 h-1/2 bg-white transform -translate-x-full transition-transform duration-300 ease-in-out">
    <div class="p-4">
        <div class="menu-overlay-button">
            <div>
                <p class="uppercase font-bold"><a href="{{ route('home') }}">playscapes</a></p>
            </div>
            <div>
                <button id="close-menu" class=" focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('about') }}" class="block  mb-4">About us</a>
            <a href="{{ route('gallery') }}" class="block  mb-4">Gallery</a>
            <a href="{{ route('contact') }}" class="block  mb-4">Contact Us</a>
        </div>
    </div>
</div>


<header class="bg-white  text-gray-700">
    <div class="px-20 flex items-center justify-between py-3 border-b">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap ">
                <img src="/comestro.png" class="md:h-14 h-12 " alt="">
            </span>
        </a>

        <!-- Navigation Links -->
        <nav class="hidden md:flex space-x-8 font-semibold ">
            <a href="#about" class="hover:text-blue-500 text-lg">About Us</a>
            <a href="#services" class="hover:text-blue-500 text-lg">Services</a>
            <a href="#portfolio" class="hover:text-blue-500 text-lg">Portfolio</a>
            <a href="#contact" class="hover:text-blue-500 text-lg">Contact</a>
        </nav>

        <!-- Call-to-Action Button -->
        <div class="hidden md:block">
            <a href="#get-started" class="bg-[#0071bc] text-white px-4 py-3 rounded hover:bg-[#0071bc] text-lg">
                Get Started
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button id="menu-toggle" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="hidden bg-gray-800 md:hidden">
        <nav class="space-y-2 px-6 py-4">
            <a href="#services" class="block hover:text-blue-500">Services</a>
            <a href="#portfolio" class="block hover:text-blue-500">Portfolio</a>
            <a href="#about" class="block hover:text-blue-500">About Us</a>
            <a href="#contact" class="block hover:text-blue-500">Contact</a>
            <a href="#get-started" class="block bg-[#f15a24] text-center text-white px-4 py-2 rounded hover:bg-[#f15a24]">
                Get Started
            </a>
        </nav>
    </div>
</header>
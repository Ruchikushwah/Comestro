<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-xl font-semibold whitespace-nowrap ">
                <img src="/comestro.png" class="md:h-10 h-10 " alt="">
            </span>
        </a>

        <!-- Navigation Links -->
        <nav class="hidden md:flex space-x-8 font-semibold ">
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('support.tickets.manage') }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Support</a>
                    </li>
                    <li>
                        <a href="{{ route('crm.lead') }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Crm</a>
                    </li>
                </ul>
            </div>

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
    <div id="mobile-menu" class="hidden bg-white md:hidden">
        <nav class="space-y-2 px-6 py-4 text-center">
            <a href="#services" class="block hover:text-blue-500">About Us</a>
            <a href="#portfolio" class="block hover:text-blue-500">Services</a>
            <a href="{{ route('support.tickets.manage') }}" class="block hover:text-blue-500">support</a>
            <a href="{{ route('crm.lead') }}" class="block hover:text-blue-500">crm</a>
            <a href="#contact" class="block hover:text-blue-500">Contact</a>
            <a href="#get-started" class="block bg-[#f15a24] text-center text-white px-4 py-2 rounded hover:bg-[#f15a24]">
                Get Started
            </a>

    </div>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuToggle = document.getElementById("menu-toggle");
            const mobileMenu = document.getElementById("mobile-menu");

            menuToggle.addEventListener("click", function() {
                mobileMenu.classList.toggle("hidden");
            });
        });
    </script>
</nav>
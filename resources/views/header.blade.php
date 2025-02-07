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
                        <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about')}}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
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

        <!-- User Info / Get Started Button -->
        <div class="hidden md:block">
            @auth
            <!-- If user is logged in, show user info -->
            <div class="relative">
                <button class="flex items-center space-x-2 text-gray-900 dark:text-white focus:outline-none" id="user-menu-button">
                    <img src="/default.jpg" class="w-8 h-8 rounded-full" alt="User Avatar">


                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Dropdown -->
                <div id="user-dropdown" class="hidden absolute right-0 mt-2  w-56 bg-white border rounded-md ">
                    <span class="block px-4 py-2 text-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">{{ Auth::user()->name }}</span>
                    <span class="block text-sm px-4 py-2 text-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 ">{{ Auth::user()->email }}</span>
                    <a href="{{route('auth.logout')}}" class="block px-4 py-2 text-gray-800    hover:text-red-600 ">Logout</a>

                </div>
            </div>
            @else
            <!-- If user is not logged in, show Get Started button -->
            <a href="{{ route('auth.register')}}" class="bg-[#0071bc] text-white px-4 py-3 rounded hover:bg-[#005fa3] text-lg">
                Get Started
            </a>
            @endauth
        </div>

        <!-- Mobile Menu Toggle -->
        <button id="menu-toggle" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="hidden bg-white">
        <nav class="space-y-2 px-6 py-4 text-right">
            <a href="#portfolio" class="block hover:text-blue-500">Services</a>
            <a href="{{ route('support.tickets.manage') }}" class="block hover:text-blue-500">Support</a>
            <a href="{{ route('crm.lead') }}" class="block hover:text-blue-500">CRM</a>

            @auth
            <!-- User dropdown in mobile -->
            <div class="border-t pt-4">
                <p class="text-gray-800 dark:text-white font-semibold">{{ Auth::user()->name }}</p>
                <a href="" class="block hover:text-blue-500">Profile</a>
                <a href="" class="block hover:text-blue-500">Dashboard</a>
                <a href="{{route('auth.logout')}}" class="block px-4 py-2 text-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">Logout</a>

            </div>
            @else
            <a href="{{ route('auth.register') }}" class="block bg-[#0071bc] text-white px-4 py-2 rounded hover:bg-[#005fa3]">
                Get Started
            </a>
            @endauth
        </nav>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuToggle = document.getElementById("menu-toggle");
            const mobileMenu = document.getElementById("mobile-menu");
            const userMenuButton = document.getElementById("user-menu-button");
            const userDropdown = document.getElementById("user-dropdown");

            menuToggle.addEventListener("click", function() {
                mobileMenu.classList.toggle("hidden");
            });

            if (userMenuButton) {
                userMenuButton.addEventListener("click", function() {
                    userDropdown.classList.toggle("hidden");
                });
            }
        });
    </script>
</nav>
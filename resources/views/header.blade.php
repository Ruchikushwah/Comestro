<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-full px-10 flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-xl font-semibold whitespace-nowrap ">
                <img src="/comestro.png" class="md:h-10 h-10" alt="">
            </span>
        </a>
        <!-- Navigation Links -->
        <nav class="hidden md:flex space-x-8 font-semibold">

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 gap-5" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 
                    md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 
                    md:dark:bg-gray-900 dark:border-gray-700">

                    <li>
                        <a href="/"
                            class="block py-2 px-3 rounded-sm md:p-0 
                                  {{ request()->is('/') ? ' text-blue-700 md:text-blue-700' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about')}}"
                            class="block py-2 px-3 rounded-sm md:p-0 
                                  {{ request()->is('about') ? ' text-blue-700 md:text-blue-700' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('support.tickets.manage') }}"
                            class="block py-2 px-3 rounded-sm md:p-0 
                                  {{ request()->is('support/tickets/manage') ? ' text-blue-700 md:text-blue-700' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                            Support
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contactus')}}"
                            class="block py-2 px-3 rounded-sm md:p-0 
                                  {{ request()->is('contactus') ? ' text-blue-700 md:text-blue-700' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                            Contact
                        </a>
                    </li>
                </ul>
                <div class="hidden md:block">
                    @auth
                    <div class="relative">
                        <button class="flex items-center space-x-2 text-gray-900 dark:text-gray-100 focus:outline-none" id="user-menu-button">
                            <img src="/default.jpg" class="w-8 h-8 rounded-full" alt="User Avatar">
                        </button>

                        <!-- Dropdown -->
                        <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-56 bg-white border rounded-md">
                            <span class="block px-4 py-2 text-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">{{ Auth::user()->name }}</span>
                            <span class="block text-sm px-4 py-2 text-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">{{ Auth::user()->email }}</span>
                            <a href="{{ route('auth.logout') }}" class="block px-4 py-2 text-gray-800 hover:text-red-600">Logout</a>
                        </div>
                    </div>
                    @else
                    <a href="{{ route('auth.register')}}" class="bg-[#0071bc] text-white px-4 py-3 rounded hover:bg-[#005fa3] text-lg">
                        Get Started
                    </a>
                    @endauth
                </div>
            </div>


            <!-- User Info / Get Started Button -->

        </nav>

        <!-- Mobile Menu Toggle -->
        <button id="menu-toggle" class="md:hidden focus:outline-none text-gray-800 dark:text-white transition">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

    </div>
</nav>

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
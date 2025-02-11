<nav class="bg-white  fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-full px-10 flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-xl font-semibold whitespace-nowrap">
                <img src="/comestro.png" class="md:h-10 h-10" alt="Comestro Logo">
            </span>
        </a>

        <!-- Mobile Menu Toggle -->
        <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Navigation Links -->
        <div class="hidden w-full md:flex md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col md:flex-row font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 md:mt-0 md:border-0 md:bg-white ">
                <li><a href="/" class="block py-2 px-3 rounded-sm md:p-0 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 ">Home</a></li>
                <li><a href="{{ route('about')}}" class="block py-2 px-3 rounded-sm md:p-0 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 ">About</a></li>
                <li><a href="{{ route('support.tickets.manage') }}" class="block py-2 px-3 rounded-sm md:p-0 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 ">Support</a></li>
                <li><a href="{{ route('contactus')}}" class="block py-2 px-3 rounded-sm md:p-0 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 ">Contact</a></li>

                <!-- User Dropdown -->
                <div class="hidden md:block relative">
                    @auth
                    <div class="relative">
                        <!-- User button -->
                        <button class="flex items-center space-x-2 text-gray-900 " id="user-menu-button">
                            <img src="/default.jpg" class="w-8 h-8 rounded-full" alt="User Avatar">
                        </button>

                        <!-- Dropdown -->
                        <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-56 bg-white border rounded-md shadow-lg ">
                            <span class="block px-4 py-2 text-gray-800  hover:bg-gray-200 ">{{ Auth::user()->name }}</span>
                            <span class="block text-sm px-4 py-2 text-gray-800  hover:bg-gray-200 ">{{ Auth::user()->email }}</span>
                            <a href="{{ route('auth.logout') }}" class="block px-4 py-2 text-gray-800 hover:text-red-600">Logout</a>
                        </div>
                    </div>
                    @else
                    <a href="{{ route('auth.register')}}" class="bg-[#0071bc] text-white px-4 py-3 rounded hover:bg-[#005fa3] text-lg">
                        Get Started
                    </a>
                    @endauth
                </div>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.getElementById("menu-toggle");
        const navbarDropdown = document.getElementById("navbar-dropdown");
        const userMenuButton = document.getElementById("user-menu-button");
        const userDropdown = document.getElementById("user-dropdown");

        // Toggle mobile menu
        menuToggle.addEventListener("click", function() {
            navbarDropdown.classList.toggle("hidden");
        });

        // Toggle user dropdown menu
        userMenuButton.addEventListener("click", function(event) {
            event.stopPropagation(); // Prevent click event from bubbling to document
            userDropdown.classList.toggle("hidden");
        });

        // Close dropdown if clicked outside
        document.addEventListener("click", function(event) {
            if (!userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
                userDropdown.classList.add("hidden");
            }
        });
    });
</script>
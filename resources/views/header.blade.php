<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
    <div class="max-w-full px-6 flex items-center justify-between mx-auto py-4">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-3">
            <img src="/comestro.png" class="h-10 md:h-10" alt="Comestro Logo">
        </a>

        <!-- Desktop Navigation (Flex Row) -->
        <div class="hidden md:flex flex-row items-center space-x-8">
            <a href="/" class="text-gray-900 hover:text-blue-700">Home</a>
            <a href="{{ route('about') }}" class="text-gray-900 hover:text-blue-700">About</a>
            <a href="{{ route('support.tickets.manage') }}" class="text-gray-900 hover:text-blue-700">Support</a>
            <a href="{{ route('contactus') }}" class="text-gray-900 hover:text-blue-700">Contact</a>

            <!-- "Get Started" button (Desktop) -->
            @guest
            <a href="{{ route('auth.register') }}" class="bg-[#0071bc] text-white px-4 py-3 rounded hover:bg-[#005fa3] text-lg">
                Get Started
            </a>
            @endguest

            <!-- User Dropdown -->
            @auth
            <div class="relative">
                <button id="user-menu-button" class="flex items-center space-x-2 text-gray-900">
                    <img src="/default.jpg" class="w-8 h-8 rounded-full" alt="User Avatar">
                </button>

                <!-- Dropdown Menu -->
                <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-56 bg-white border rounded-md shadow-lg">
                    <span class="block px-4 py-2 text-gray-800 hover:bg-gray-200">{{ Auth::user()->name }}</span>
                    <span class="block text-sm px-4 py-2 text-gray-800 hover:bg-gray-200">{{ Auth::user()->email }}</span>
                    <a href="{{ route('auth.logout') }}" class="block px-4 py-2 text-gray-800 hover:text-red-600">Logout</a>
                </div>
            </div>
            @endauth
        </div>

        <!-- Mobile Menu Toggle -->
        <button id="menu-toggle" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu (Dropdown) -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center px-6 pb-4">
        <a href="/" class="block py-2 px-3 text-gray-900 hover:bg-gray-100">Home</a>
        <a href="{{ route('about') }}" class="block py-2 px-3 text-gray-900 hover:bg-gray-100">About</a>
        <a href="{{ route('support.tickets.manage') }}" class="block py-2 px-3 text-gray-900 hover:bg-gray-100">Support</a>
        <a href="{{ route('contactus') }}" class="block py-2 px-3 text-gray-900 hover:bg-gray-100">Contact</a>

        <!-- "Get Started" button inside Mobile Menu -->
        @guest
        <a href="{{ route('auth.register') }}" class="block mt-4 text-center bg-[#0071bc] text-white px-4 py-3 rounded hover:bg-[#005fa3] text-lg">
            Get Started
        </a>
        @endguest
    </div>
</nav>

<!-- JavaScript for Mobile Toggle & User Dropdown -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.getElementById("menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");
        const userMenuButton = document.getElementById("user-menu-button");
        const userDropdown = document.getElementById("user-dropdown");

        // Toggle mobile menu
        menuToggle.addEventListener("click", function() {
            mobileMenu.classList.toggle("hidden");
        });

        // Toggle user dropdown
        if (userMenuButton) {
            userMenuButton.addEventListener("click", function(event) {
                event.stopPropagation();
                userDropdown.classList.toggle("hidden");
            });
        }

        // Close dropdowns if clicked outside
        document.addEventListener("click", function(event) {
            if (userDropdown && !userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
                userDropdown.classList.add("hidden");
            }
        });
    });
</script>
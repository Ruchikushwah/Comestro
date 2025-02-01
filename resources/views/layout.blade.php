<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-CECBcA4t.css') }}">
    {{-- <script src="{{ asset('build/assets/app-Xaw6OIO1.js') }}" defer></script> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <header>
        @include('header')
    </header>

    <main>
        @section('content')
        @show
    </main>



    <footer class="bg-gray-200 text-gray-700 border-t">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
                <!-- Apps and Extensions -->
                <div>
                    <h3 class="font-semibold text-lg">Apps and Extensions</h3>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-600">Mobile Apps</a></li>
                        <li><a href="#" class="hover:text-blue-600">Desktop Apps</a></li>
                        <li><a href="#" class="hover:text-blue-600">Developer Center</a></li>
                        <li><a href="#" class="hover:text-blue-600">Google Workspace Integration</a></li>
                        <li><a href="#" class="hover:text-blue-600">Microsoft 365 Integration</a></li>
                        <li><a href="#" class="hover:text-blue-600">Apps for Apple Watch</a></li>
                        <li><a href="#" class="hover:text-blue-600">Product Integrations</a></li>
                        <li><a href="#" class="hover:text-blue-600">Browser Extensions</a></li>
                    </ul>
                </div>

                <!-- Learn -->
                <div>
                    <h3 class="font-semibold text-lg">Learn</h3>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-600">Training & Certification</a></li>
                        <li><a href="#" class="hover:text-blue-600">Academy</a></li>
                        <li><a href="#" class="hover:text-blue-600">Blog</a></li>
                        <li><a href="#" class="hover:text-blue-600">Knowledge Base</a></li>
                    </ul>
                </div>

                <!-- Community -->
                <div>
                    <h3 class="font-semibold text-lg">Community</h3>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-600">User Community</a></li>
                        <li><a href="#" class="hover:text-blue-600">Customer Stories</a></li>
                        <li><a href="#" class="hover:text-blue-600">Influence</a></li>
                        <li><a href="#" class="hover:text-blue-600">Find a Partner</a></li>
                        <li><a href="#" class="hover:text-blue-600">Startups</a></li>
                        <li><a href="#" class="hover:text-blue-600">Affiliate Program</a></li>

                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h3 class="font-semibold text-lg">Company</h3>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-600">About Us</a></li>
                        <li><a href="#" class="hover:text-blue-600">Press</a></li>
                        <li><a href="#" class="hover:text-blue-600">Events</a></li>
                        <li><a href="#" class="hover:text-blue-600">Newsroom</a></li>
                        <li><a href="#" class="hover:text-blue-600">Service Status</a></li>
                        <li><a href="#" class="hover:text-blue-600">Careers</a></li>
                    </ul>
                </div>

                <!-- Contact Sales -->
                <div>
                    <h3 class="font-semibold text-lg">Contact</h3>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li><span class="font-semibold">Phone</span></li>
                        <li><a href="#" class="text-blue-600">9546805880</a></li>
                        <li><a href="#" class="text-blue-600">1800 572 3535</a></li>
                        <li><span class="font-semibold">Email</span></li>
                        <li><a href="#" class="text-blue-600">comestro@gmail.com</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social Links -->
            <div class="flex justify-center mt-8 space-x-4">
                
                <a href="#" class=" hover:text-gray-800 text-2xl"><i class="fa-brands fa-x-twitter"></i></i></a>
                <a href="#" class=" hover:text-gray-800 text-2xl"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="hover:text-gray-800 text-2xl"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-gray-800 text-2xl"><i class="fab fa-youtube"></i></a>
                <a href="#" class="hover:text-gray-800 text-2xl"><i class="fa-brands fa-github"></i></a>
            </div>

            <!-- Bottom Links -->
            <div class="mt-6 border-t pt-6 text-center text-sm space-x-4 ">
                <a href="#" class="hover:text-blue-600"> Home</a>
                <a href="#" class="hover:text-blue-600">Contact Us</a>
                <a href="#" class="hover:text-blue-600">service</a>
                <a href="#" class="hover:text-blue-600">support</a>
                <a href="#" class="hover:text-blue-600">CRM</a>
                <a href="#" class="hover:text-blue-600">Privacy Policy</a>
                <a href="#" class="hover:text-blue-600">Cookie Policy</a>
            </div>

            <!-- Copyright -->
            <div class="mt-4 text-center text-sm bg-gray-800 text-white py-5">
                © 2025, Comestro Techlabs Pvt. Ltd. All Rights Reserved.
            </div>
        </div>
    </footer>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    @section('js')

    @show
</body>

</html>
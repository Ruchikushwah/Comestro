<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-CECBcA4t.css') }}">
    <script src="{{ asset('build/assets/app-Xaw6OIO1.js') }}" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        @include('header')
    </header>

    <main>
       @section('content')
       @show
    </main>

    <footer>
        <div class="bg-gray-100 px-[7%]">
            <div class="container mx-auto px-8 py-10">
                <div class="grid grid-cols-1 md:grid-cols-5 text-black ">
                    <div class="space-y-2">
                        <h6 class="text-lg font-semibold">Apps and Extensions</h6>
                        <p class="hover:text-blue-400">Blog</p>
                        <p class="hover:text-blue-400">Twitter</p>
                        <p class="hover:text-blue-400">GitHub</p>
                        <p class="hover:text-blue-400">Ask Question on Stack</p>
                        <p class="hover:text-blue-400">More Resources</p>
                        <p class="hover:text-blue-400">Components APIs</p>
                        <p class="hover:text-blue-400">More Resources</p>
                        <p class="hover:text-blue-400">Components APIs</p>
                        <p class="hover:text-blue-400">More Resources</p>
                    </div>
                    <div class="space-y-2">
                        <h6 class="text-lg font-semibold">Learn</h6>
                        <p class="hover:text-blue-400">The React Native Community</p>
                        <p class="hover:text-blue-400">Who's using React Native</p>
                        <p class="hover:text-blue-400">Ask Question on Stack</p>
                        <p class="hover:text-blue-400">Contributor Guide</p>
                        <p class="hover:text-blue-400">DEV Community</p>
                        <p class="hover:text-blue-400">Components APIs</p>
                        <p class="hover:text-blue-400">More Resources</p>
                        <p class="hover:text-blue-400">Components APIs</p>
                        <p class="hover:text-blue-400">More Resources</p>
                    </div>
                    <div class="space-y-2">
                        <h6 class="text-lg font-semibold">Community</h6>
                        <p class="hover:text-blue-400">Blog</p>
                        <p class="hover:text-blue-400">Twitter</p>
                        <p class="hover:text-blue-400">GitHub</p>
                        <p class="hover:text-blue-400">Ask Question on Stack</p>
                        <p class="hover:text-blue-400">More Resources</p>
                        <p class="hover:text-blue-400">Components APIs</p>
                        <p class="hover:text-blue-400">More Resources</p>
                        <p class="hover:text-blue-400">Components APIs</p>
                        <p class="hover:text-blue-400">More Resources</p>
                    </div>
                    <div class="space-y-2">
                        <h6 class="text-lg font-bold ">Company</h6>
                        <p class="hover:text-blue-400">Blog</p>
                        <p class="hover:text-blue-400">Twitter</p>
                        <p class="hover:text-blue-400">GitHub</p>
                        <p class="hover:text-blue-400">Components APIs</p>
                        <p class="hover:text-blue-400">More Resources</p>
                        <p class="hover:text-blue-400">Components APIs</p>
                        <p class="hover:text-blue-400">More Resources</p>
                        <p class="hover:text-blue-400">Components APIs</p>
                        <p class="hover:text-blue-400">More Resources</p>
                    </div>
                    <div class="space-y-2">
                        <h6 class="text-lg font-semibold">Contact Sales</h6>
                        <p class="text-lg hover:text-blue-400 font-lg">Phone</p>
                        <p class="text-lg hover:text-blue-400">9876543123</p>
                        <p class="text-lg hover:text-blue-400">1234567898</p>
                        <p class="text-lg hover:text-blue-400 font-lg">Email</p>
                        <p class="text-lg hover:text-blue-400">sadique@gmail.com</p>
                        <p class="text-lg hover:text-blue-400">Components APIs</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-center gap-4 bg-gray-100 py-6 text-black">
            <img src="/comestro.png" alt="OSS Logo" class="h-10 w-40">

        </div>

        <footer class="bg-gray-900 text-white py-8">
            <div class="container mx-auto px-8 text-center">
                <p class="text-sm">&copy; 2025 [Comestro techlab Pvt. Ltd.]. All rights reserved.</p>
            </div>
        </footer>

    </footer>


</body>

</html>
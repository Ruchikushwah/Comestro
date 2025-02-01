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


    <footer class="py-10 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">
               
                <div>
                    <img src="/comestro.png" alt="Comestro Logo" class="lg:h-16 h-10">
                    <p class="text-gray-900 md:text-md text-sm mt-4 py-2 leading-relaxed">
                        At Comestro, we specialize in building robust and scalable software solutions tailored to industry needs,
                        ensuring high performance, security, and user-friendly experiences. 
                        With a focus on real-world applications, we integrate cutting-edge technologies to create efficient, reliable,
                        and innovative software that empowers businesses and individuals to achieve their goals.
                    </p>
                </div>
    
               
                <div class="md:pl-12">
                    <h3 class="text-lg font-semibold mb-4">Menu</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li><a href="#" class="hover:text-indigo-600">About</a></li>
                        <li><a href="#" class="hover:text-indigo-600">Courses</a></li>
                        <li><a href="#" class="hover:text-indigo-600">Contact Us</a></li>
                        <li><a href="#" class="hover:text-indigo-600">Privacy & Policy</a></li>
                        <li><a href="#" class="hover:text-indigo-600">Terms & Conditions</a></li>
                    </ul>
                </div>
    
              
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <p class="text-gray-700">{{ env('APP_NAME') }}</p>
                    <p class="text-gray-700">Purnea, Bihar, India</p>
                    <p class="text-gray-700">Email: info@LearnSyntax.com</p>
                    <p class="text-gray-700">Phone: +919546805580</p>
                </div>
            </div>
        </div>
    
       
       
    </footer>
    <div class="bg-gray-900 text-white text-center py-4">
        <p class="text-sm">&copy; 2025 Comestro Techlab Pvt. Ltd. All rights reserved.</p>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    @section('js')

    @show
</body>

</html>
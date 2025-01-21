@extends('layout')
@section('content')

{{-- <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-3xl font-extrabold text-gray-800">10+ Years</h3>
                <p class="mt-2 text-gray-600">In Business</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-3xl font-extrabold text-gray-800">500+</h3>
                <p class="mt-2 text-gray-600">Clients Worldwide</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-3xl font-extrabold text-gray-800">1000+</h3>
                <p class="mt-2 text-gray-600">Projects Delivered</p>
            </div>
        </div>
    </div>
</section> --}}

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


@endsection
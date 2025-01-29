@extends('layout')
@section('content')


<div class="bg-[#FAFAFA] flex  justify-between items-center h-[600px] px-10 gap-5">
    <div class="flex flex-1 flex-col gap-5 px-5 left-20">

        <h2 class="text-4xl font-semibold">Build Your Dream Software</h2>

        <p class="text-xl text-gray-600 font-inter"> Transform your ideas into powerful software solutions.<br> Our
            expert team is here to help you create scalable, efficient,<br> and user-friendly platforms tailored to your
            needs.</p>
        <div class="hidden md:block">
            <a href="#get-started" class="bg-[#0071bc] text-white px-4 py-3 rounded hover:bg-[#0071bc] text-lg">
                Let's get Started
            </a>
        </div>


    </div>
    <div class="flex flex-1">
        <img src="\image__2_-removebg-preview.png" alt="">
    </div>

</div>


<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div
                class="flex flex-col items-center justify-center p-8  h-[250px] w-[320px] border-2 hover:border-[#704264]  rounded bg-white">
                <div class="text-purple-500 bg-opacity-35 text-4xl mb-4 self-start">
                    <i class="fas fa-cog"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 self-start">Service Title</h3>
                <p class="text-gray-600  font-inter text-sm">
                    Brief description of the service provided. Make it concise and clear.
                </p>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div
                class="flex flex-col items-center justify-center p-6 border-2 border-gray-300 hover:border-[#704264] rounded  h-[250px] w-[320px]  bg-white">
                <div class="text-purple-500 bg-opacity-35 text-4xl mb-4">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Another Service</h3>
                <p class="text-gray-600 text-center">
                    Brief description of the service provided. Make it concise and clear.
                </p>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div
                class="flex flex-col  h-[250px] w-[320px] items-center justify-center p-6 border-2 border-gray-300 hover:border-[#704264] rounded bg-white">
                <div class="text-purple-500 bg-opacity-35 text-4xl mb-4">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Analytics Service</h3>
                <p class="text-gray-600 text-center">
                    Brief description of the service provided. Make it concise and clear.
                </p>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div
                class="flex flex-col  h-[250px] w-[320px] items-center justify-center p-6 border-2  border-gray-300 hover:border-[#704264] rounded  bg-white">
                <div class="text-purple-500 bg-opacity-35 text-4xl mb-4">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Consulting Service</h3>
                <p class="text-gray-600 text-center">
                    Brief description of the service provided. Make it concise and clear.
                </p>
            </div>
        </div>
        <!-- Item 5 -->

    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>

    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


<div class="w-full h-[600px] bg-[#E7DAED] px-20 border-b">
    <h2 class="text-4xl font-bold text-center mb-4 py-10">Services We Offer</h2>
    <div class="grid grid-cols-4 ">
        <!-- Single Service Card -->
        <div
            class="flex flex-col items-center justify-center p-8  h-[250px] w-[320px] border-2 hover:border-[#704264]  rounded bg-white">
            <div class="text-purple-500 bg-opacity-35 text-4xl mb-4 self-start">
                <i class="fas fa-cog"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2 self-start">Service Title</h3>
            <p class="text-gray-600  font-inter text-sm">
                Brief description of the service provided. Make it concise and clear.
            </p>
        </div>
        <!-- Service Card 2 -->
        <div
            class="flex flex-col items-center justify-center p-6 border-2 border-gray-300 hover:border-[#704264] rounded  h-[250px] w-[320px]  bg-white">
            <div class="text-purple-500 bg-opacity-35 text-4xl mb-4">
                <i class="fas fa-tools"></i>
            </div>
            <h3 class="text-lg font-semibold mb-2">Another Service</h3>
            <p class="text-gray-600 text-center">
                Brief description of the service provided. Make it concise and clear.
            </p>
        </div>
        <!-- Service Card 3 -->
        <div
            class="flex flex-col  h-[250px] w-[320px] items-center justify-center p-6 border-2 border-gray-300 hover:border-[#704264] rounded bg-white">
            <div class="text-purple-500 bg-opacity-35 text-4xl mb-4">
                <i class="fas fa-chart-line"></i>
            </div>
            <h3 class="text-lg font-semibold mb-2">Analytics Service</h3>
            <p class="text-gray-600 text-center">
                Brief description of the service provided. Make it concise and clear.
            </p>
        </div>
        <!-- Service Card 4 -->
        <div
            class="flex flex-col  h-[250px] w-[320px] items-center justify-center p-6 border-2  border-gray-300 hover:border-[#704264] rounded  bg-white">
            <div class="text-purple-500 bg-opacity-35 text-4xl mb-4">
                <i class="fas fa-briefcase"></i>
            </div>
            <h3 class="text-lg font-semibold mb-2">Consulting Service</h3>
            <p class="text-gray-600 text-center">
                Brief description of the service provided. Make it concise and clear.
            </p>
        </div>
    </div>
</div>


<div class="flex items-center justify-center h-[700px] py-6 gap-5 text-center flex-col">
    <h2 class="text-2xl font-light mb-5"> Why Customers Love <br>
        <span class="text-4xl font-semibold "> working with Us</span>
    </h2>
    <p class="text-center text-xl  tracking-wide font-inter text-gray-400 mb-2">Without any doubt I recommend Alcaline
        Solutions as one of<br> the best web design and digital marketing agencies. One of <br>the best agencies I’ve
        came across so far. Wouldn’t be <br>hesitated to introduce their work to someone else.</p>
    <div class="max-w-sm mx-auto p-4 bg-white flex gap-16 items-center justify-center">
        <div class="flex flex-col items-center">
            <!-- Image Section -->
            <img class="w-24 h-24 rounded-full " src="\02-image-free-img.jpg" alt="User Image">

            <!-- Name -->
            <h3 class="mt-4 text-lg font-semibold text-gray-900">John Doe</h3>

            <!-- Rating Section -->
            <div class="flex items-center mt-2">
                <!-- Rating Stars -->
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 ms-1 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <!-- Image Section -->
            <img class="w-24 h-24 rounded-full " src="\02-image-free-img.jpg" alt="User Image">

            <!-- Name -->
            <h3 class="mt-4 text-lg font-semibold text-gray-900">John Doe</h3>

            <!-- Rating Section -->
            <div class="flex items-center mt-2">
                <!-- Rating Stars -->
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 ms-1 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <!-- Image Section -->
            <img class="w-24 h-24 rounded-full " src="\02-image-free-img.jpg" alt="User Image">

            <!-- Name -->
            <h3 class="mt-4 text-lg font-semibold text-gray-900">John Doe</h3>

            <!-- Rating Section -->
            <div class="flex items-center mt-2">
                <!-- Rating Stars -->
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 ms-1 text-yellow-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <!-- Image Section -->
            <img class="w-24 h-24 rounded-full " src="\02-image-free-img.jpg" alt="User Image">
            <!-- Rating Section -->
            <div class="flex items-center mt-2">
                <!-- Rating Stars -->
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 ms-1 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <!-- Image Section -->
            <img class="w-24 h-24 rounded-full " src="\02-image-free-img.jpg" alt="User Image">

            <!-- Name -->
            <h3 class="mt-4 text-lg font-semibold text-gray-900">John Doe</h3>

            <!-- Rating Section -->
            <div class="flex items-center mt-2">
                <!-- Rating Stars -->
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 ms-1 text-yellow-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <!-- Image Section -->
            <img class="w-24 h-24 rounded-full " src="\02-image-free-img.jpg" alt="User Image">
            <!-- Rating Section -->
            <div class="flex items-center mt-2">
                <!-- Rating Stars -->
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 ms-1 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <!-- Image Section -->
            <img class="w-24 h-24 rounded-full " src="\02-image-free-img.jpg" alt="User Image">

            <!-- Name -->
            <h3 class="mt-4 text-lg font-semibold text-gray-900">John Doe</h3>

            <!-- Rating Section -->
            <div class="flex items-center mt-2">
                <!-- Rating Stars -->
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-yellow-300 ms-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 ms-1 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
            </div>
        </div>

    </div>
</div>
<div class=" w-full h-[600px] flex items-center gap-2 justify-center flex-col mb-6  bg-[#E7DAED] ">
    <h2 class="text-2xl">Our design and
    </h2>
    <p class="text-2xl font-bold tracking-wide   border-b mb-2"> development approach</p>
    <div class="  px-10 lg:px-0 grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center space-x-4 gap-2">
                <div class="bg-gray-800 p-4 rounded-lg">
                    <img src="\15af7b7deecea6146e74ca0b934e7068.png" alt="Icon 1" class="w-8 h-8">
                </div>
                <h3 class="text-lg font-bold">UX Driven Engineering</h3>
            </div>
            <p class="mt-4 text-gray-600">
                Unlike other companies, we are a UX-first development company. Projects are driven by designers and they ensure experiences translate to code.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center space-x-4 gap-2">
                <div class="bg-[#0974f1] p-4 rounded-lg">
                    <img src="\code.png" alt="Icon 2" class="w-8 h-8">
                </div>
                <h3 class="text-lg font-bold">Developing Shared Understanding</h3>
            </div>
            <p class="mt-4 text-gray-600">
                Unlike other companies, we are a UX-first development company. Projects are driven by designers and they ensure experiences translate to code.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center space-x-4">
                <div class="bg-gray-100 p-3 rounded-lg">
                    <img src="\a0db3080547d6c603bcf21459d01c67c.png" alt="Icon 3" class="w-6 h-6">
                </div>
                <h3 class="text-lg font-bold">Proven Experience and Expertise</h3>
            </div>
            <p class="mt-4 text-gray-600">
                Unlike other companies, we are a UX-first development company. Projects are driven by designers and they ensure experiences translate to code.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center space-x-4">
                <div class="bg-gray-100 p-3 rounded-lg">
                    <img src="\092f229ed5482774ce2043eee60e0d61.png" alt="Icon 4" class="w-6 h-6">
                </div>
                <h3 class="text-lg font-bold">Security & Intellectual Property</h3>
            </div>
            <p class="mt-4 text-gray-600">
                Unlike other companies, we are a UX-first development company. Projects are driven by designers and they ensure experiences translate to code.
            </p>
        </div>

        <!-- Card 5 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center space-x-4">
                <div class="bg-gray-100 p-3 rounded-lg">
                    <img src="\f8aa947779aad5e18aabd413ad621827.png" alt="Icon 5" class="w-6 h-6">
                </div>
                <h3 class="text-lg font-bold">Code Reviews</h3>
            </div>
            <p class="mt-4 text-gray-600">
                Unlike other companies, we are a UX-first development company. Projects are driven by designers and they ensure experiences translate to code.
            </p>
        </div>

        <!-- Card 6 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center space-x-4">
                <div class="bg-gray-100 p-3 rounded-lg">
                    <img src="/5996bf9e039d5f35e3919fc2fd2b80ff.png" alt="Icon 6" class="w-6 h-6">
                </div>
                <h3 class="text-lg font-bold">Quality Assurance & Testing</h3>
            </div>
            <p class="mt-4 text-gray-600">
                Unlike other companies, we are a UX-first development company. Projects are driven by designers and they ensure experiences translate to code.
            </p>
        </div>
    </div>
</div>


<div class=" w-full h-[600px] flex items-center gap-2 justify-center flex-col mb-6 border  ">
    <h2 class="text-2xl">Our</h2>
    <p class="text-2xl font-bold tracking-wide   border-b mb-2">Tech Stack</p>
    <div class="flex justify-center space-x-4 mb-12">
        <button
            class="button px-4 pb-2 font-medium border-b-4 text-transparent bg-gradient-to-r from-[#F76680] to-[#57007B] bg-clip-text  active"
            onclick="setActive(this)">
            Backend
        </button>
        <button class="button text-gray-500 px-4 pb-2 font-medium" onclick="setActive(this)">
            Frontend
        </button>
        <button class="button text-gray-500 px-4 pb-2 font-medium" onclick="setActive(this)">
            Databases
        </button>
        <button class="button text-gray-500 px-4 pb-2 font-medium" onclick="setActive(this)">
            CMS
        </button>
        <button class="button text-gray-500 px-4 pb-2 font-medium" onclick="setActive(this)">
            CloudTesting
        </button>
        <button class="button text-gray-500 px-4 pb-2 font-medium" onclick="setActive(this)">
            DevOps
        </button>
    </div>

    <!-- Tech Stack Icons -->
    <div class="grid grid-cols-3 md:grid-cols-6 gap-8 items-center justify-center">
        <img src="nodejs-logo.svg" alt="Node.js" class="h-12">
        <img src="php-logo.svg" alt="PHP" class="h-12">
        <img src="mysql-logo.svg" alt="MySQL" class="h-12">
        <img src="java-logo.svg" alt="Java" class="h-12">
        <img src="python-logo.svg" alt="Python" class="h-12">
        <img src="rails-logo.svg" alt="Rails" class="h-12">

    </div>

    <!-- JavaScript -->
    <script>
        function setActive(button) {
            // Remove the "active" class from all buttons
            document.querySelectorAll('.button').forEach((btn) => {
                btn.classList.remove(
                    'text-transparent',
                    'bg-gradient-to-r',
                    'from-[#F76680]',
                    'to-[#57007B]',
                    'bg-clip-text',
                    'border-gradient-to-r',
                    'from-[#943c4c]',
                    'to-[#56007be7]'
                );
                btn.classList.add('text-gray-500'); // Reset text color
            });

            // Add the "active" class to the clicked button
            button.classList.remove('text-gray-500');
            button.classList.add(
                'text-transparent',
                'bg-gradient-to-r',
                'from-[#F76680]',
                'to-[#57007B]',
                'bg-clip-text',
                'border-gradient-to-r',
                'from-[#943c4c]',
                'to-[#56007be7]'
            );
        }
    </script>

</div>
<div class="flex flex-1 items-center justify-center    h-64 bg-[#fff2e1ce] flex-col">
    <h2 class="text-4xl font-inter text-gray-700 py-5 ">Brands that trust us</h2>
    <div class="gap-8 flex">

        <a href="" class="px-4 py-5">
            <img src="\comestro.png" alt="" class="w-22 h-14">
        </a>
        <a href="" class="px-4 py-5">
            <img src="\comestro.png" alt="" class="w-22 h-14">
        </a>
        <a href="" class="px-4 py-5">
            <img src="\comestro.png" alt="" class="w-22 h-14">
        </a>
        <a href="" class="px-4 py-5">
            <img src="\comestro.png" alt="" class="w-22 h-14">
        </a>
        <a href="#" class="text-2xl font-bold px-4 py-5">
            <img src="logo.png" alt="" class="w-22 h-14">
        </a>
        <a href="" class="px-4 py-5">
            <img src="/logo (1).png" alt="" class="w-22 h-14">
        </a>
    </div>

</div>
<div class="flex items-center gap-2 justify-center flex-col bg-gray-100 py-16">
    <h2 class="text-2xl font-inter">How development </h2>
    <p class="text-2xl font-bold tracking-wide   border-b mb-2"> through Alcaline works</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
        <!-- Step 1 -->
        <div class="bg-white p-6 rounded shadow-md">
            <h3 class="text-lg font-bold mb-2"> <span
                    class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                    #1
                </span> Assemble the right team</h3>
            <p class="text-sm text-gray-600">We handle all aspects of vetting and choosing the right team for you.</p>
        </div>
        <!-- Step 2 -->
        <div class="bg-white p-6 rounded shadow-md">
            <h3 class="text-lg font-bold mb-2"> <span
                    class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                    #2
                </span> Sprint planning</h3>
            <p class="text-sm text-gray-600">Sprint roadmap is a collective effort to clarify tasks and ensure shared understanding.</p>
        </div>
        <!-- Step 3 -->
        <div class="bg-white p-6 rounded shadow-md">
            <h3 class="text-lg font-bold mb-2"> <span
                    class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                    #3
                </span> Tech architecture</h3>
            <p class="text-sm text-gray-600">We break monolithic apps into microservices for faster development.</p>
        </div>
        <!-- Step 4 -->
        <div class="bg-white p-6 rounded shadow-md">
            <h3 class="text-lg font-bold mb-2"> <span
                    class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                    #4
                </span> Standups & weekly demos</h3>
            <p class="text-sm text-gray-600">Regular standups and reviews ensure everyone stays on the same page.</p>
        </div>
        <!-- Step 5 -->
        <div class="bg-white p-6 rounded shadow-md">
            <h3 class="text-lg font-bold mb-2">
                <span
                    class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                    #5
                </span>Code reviews
            </h3>
            <p class="text-sm text-gray-600">Code reviews help detect memory leaks, performance issues, and bad smells.</p>
        </div>
        <!-- Step 6 -->
        <div class="bg-white p-6 rounded ">
            <h3 class="text-lg font-bold mb-2">
                <span
                    class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                    #6
                </span>
                Iterative delivery
            </h3>
            <p class="text-sm text-gray-600">
                We divide the implementation process into smaller checkpoints.
            </p>
        </div>

    </div>

</div>
<div class="w-full h-[300px] mt-10 border-b">
    <div class=" flex  flex-col items-center justify-center py-5 px-5 gap-5 ">
    </div>
    <div class="w-full h-[300px] mt-10 border-b">
        <div class=" flex  flex-col items-center justify-center py-5 px-5 gap-5 ">

            <h2 class="text-4xl font-semibold ">Your privacy is our responsibility</h2>
            <p class="text-xl font-light text-center  text-gray-600">We believe that trust is paramount in a
                relationship.<br> We do not own or sell your data, and we most certainly do not bank on advertising-based
                business models.<br> The only way we make money is from the software license fees you pay us.</p>
            <a href="#contact" class="px-8 py-4 bg-[#0071bc] text-white rounded-lg shadow hover:[#0071bc]">
                Contact us
            </a>

        </div>
    </div>

</div>





@endsection
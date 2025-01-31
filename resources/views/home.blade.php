@extends('layout')
@section('content')


<div class="bg-[#FAFAFA] flex flex-wrap md:flex-nowrap justify-between items-center min-h-[700px] px-5 md:px-10 gap-5 ">
    <div class="flex flex-1 flex-col gap-5 px-5 md:px-10 md:text-left">
        <h2 class="text-3xl md:text-2xl font-semibold">Build Your Dream Software</h2>

        <p class="text-lg md:text-xl text-gray-600 font-inter">
            Transform your ideas into powerful software solutions.<br>
            Our expert team is here to help you create scalable, efficient,<br>
            and user-friendly platforms tailored to your needs.
        </p>

        <div class="hidden md:block">
            <a href="#get-started" class="bg-[#0071bc] text-white px-4 py-3 rounded hover:bg-[#005fa3] text-lg">
                Let's get Started
            </a>
        </div>
    </div>

    <div class="flex flex-1 justify-center md:justify-end">
        <img src="/image__2_-removebg-preview.png" alt="Software illustration" class="max-w-full md:max-w-[80%]">
    </div>
</div>



<div class="bg-gray-50 font-sans py-5">
    <!-- Header Section -->
    <div class="flex flex-col items-center justify-center ">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 text-center">Services we offer</h1>
        <img src="https://dashboard.codeparrot.ai/api/image/Z5xHFOxZjZ9DnCA7/slider-n.png" alt="slider nodes" class="w-32 mt-2">
    </div>

    <!-- Carousel Section -->
    <div class="relative w-full max-w-7xl mx-auto overflow-hidden py-4">
        <!-- Carousel Wrapper -->
        <div class="flex transition-transform duration-300 ease-in-out" style="gap: 20px;">
            <!-- Card 1 -->
            <div class="min-w-[333px] w-full h-[287px] bg-white rounded-lg shadow-lg relative overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://dashboard.codeparrot.ai/api/image/Z5xHFOxZjZ9DnCA7/card-wra.png');"></div>
                <div class="relative z-10 p-6 flex flex-col gap-4">
                    <div class="flex flex-col gap-3">
                        <img src="https://dashboard.codeparrot.ai/api/image/Z5xHFOxZjZ9DnCA7/group-1.png" alt="Mobile App Development" class="w-14 h-14">
                        <h3 class="text-xl font-semibold bg-gradient-to-r from-pink-500 to-purple-700 bg-clip-text text-transparent">Mobile App Development</h3>
                    </div>
                    <p class="text-sm text-gray-600">
                        A Website is an extension of yourself and we can help you to express it properly. Your website is your number one marketing asset because we live in a digital age.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="min-w-[333px]  w-full h-[287px] bg-white rounded-lg shadow-lg relative overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://dashboard.codeparrot.ai/api/image/Z5xHFOxZjZ9DnCA7/card-wra-2.png');"></div>
                <div class="relative z-10 p-6 flex flex-col gap-4">
                    <div class="flex flex-col gap-3">
                        <img src="https://dashboard.codeparrot.ai/api/image/Z5xHFOxZjZ9DnCA7/group-1-2.png" alt="Software Testing" class="w-14 h-14">
                        <h3 class="text-xl font-semibold bg-gradient-to-r from-pink-500 to-purple-700 bg-clip-text text-transparent">Software Testing Service</h3>
                    </div>
                    <p class="text-sm text-gray-600">
                        A Website is an extension of yourself and we can help you to express it properly. Your website is your number one marketing asset because we live in a digital age.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="min-w-[330px] w-full md:w-[700px] lg:w-[900px] h-[287px] bg-white rounded-lg  relative overflow-hidden">

                <div class="absolute inset-0 bg-cover bg-center"></div>
                <div class="relative z-10 p-6 flex flex-col gap-4">
                    <div class="flex flex-col gap-3">
                        <img src="https://dashboard.codeparrot.ai/api/image/Z5xHFOxZjZ9DnCA7/group-1-3.png" alt="Web Development" class="w-14 h-14">
                        <h3 class="text-xl font-semibold bg-gradient-to-r from-pink-500 to-purple-700 bg-clip-text text-transparent">
                            Web Design & Development
                        </h3>
                    </div>
                    <p class="text-sm text-gray-600">
                        A Website is an extension of yourself and we can help you to express it properly. Your website is your number one marketing asset because we live in a digital age.
                    </p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="min-w-[333px] w-full h-[287px] bg-white rounded-lg relative overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center"></div>
                <div class="relative z-10 p-6 flex flex-col gap-4">
                    <div class="flex flex-col gap-3">
                        <img src="https://dashboard.codeparrot.ai/api/image/Z5xHFOxZjZ9DnCA7/group-1-3.png" alt="Web Development" class="w-14 h-14">
                        <h3 class="text-xl font-semibold bg-gradient-to-r from-pink-500 to-purple-700 bg-clip-text text-transparent">
                            Web Design & Development
                        </h3>
                    </div>
                    <p class="text-sm text-gray-600">
                        A Website is an extension of yourself and we can help you to express it properly. Your website is your number one marketing asset because we live in a digital age.
                    </p>
                </div>
            </div>
        </div>

        <!-- Carousel Dots -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex gap-2">
            <span class="w-3 h-3 bg-gray-300 rounded-full cursor-pointer dot active"></span>
            <span class="w-3 h-3 bg-gray-300 rounded-full cursor-pointer dot"></span>
            <span class="w-3 h-3 bg-gray-300 rounded-full cursor-pointer dot"></span>
            <span class="w-3 h-3 bg-gray-300 rounded-full cursor-pointer dot"></span>
        </div>
    </div>
</div>

<div class="flex flex-1 items-center justify-center h-56 bg-blue-50 flex-col">
    <h2 class="text-2xl sm:text-3xl md:text-4xl font-inter text-gray-700 py-4">Brands that trust us</h2>
    <div class="gap-4 sm:gap-8 flex flex-wrap justify-center">
        <a href="" class="px-2 py-3 sm:px-4 sm:py-5">
            <img src="\image.jpeg" alt="" class="w-22 h-10 sm:w-22 sm:h-14">
        </a>
        <a href="" class="px-2 py-3 sm:px-4 sm:py-5">
            <img src="\image (3).png" alt="" class="w-22 h-10 sm:w-24 sm:h-16">
        </a>
        <a href="" class="px-2 py-3 sm:px-4 sm:py-5">
            <img src="\logo (2).png" alt="" class="w-22 h-10 sm:w-24 sm:h-16">
        </a>
        <a href="" class="px-2 py-3 sm:px-4 sm:py-5">
            <img src="\comestro.png" alt="" class="w-22 h-10 sm:w-22 sm:h-14">
        </a>
        <a href="#" class="text-2xl font-bold px-2 py-3 sm:px-4 sm:py-5">
            <img src="logo.png" alt="" class="w-22 h-10 sm:w-22 sm:h-14">
        </a>
        <a href="" class="px-2 py-3 sm:px-4 sm:py-5">
            <img src="/logo (1).png" alt="" class="w-22 h-10 sm:w-22 sm:h-14">
        </a>
    </div>
</div>

<div class="bg-gray-50 text-gray-900 py-8">
    <section class="py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold text-gray-700 mb-2">Our design and</h2>
            <h1 class="text-4xl font-extrabold text-purple-600">Development Approach</h1>
        </div>
    </section>

    <section class="px-6 md:px-12 lg:px-36 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="max-w-xl mx-auto bg-gray-200 p-6 rounded-lg">
            <div class="flex gap-6 items-start">
                <img src="https://th.bing.com/th/id/OIP.P3LAMQz4AleJ-uQFxW3m0AHaE8?w=261&h=180&c=7&r=0&o=5&pid=1.7" class="w-14 h-14 hover:opacity-80 transition-opacity duration-300 cursor-pointer">
                <div class="flex flex-col gap-2">
                    <h2 class="text-xl font-semibold text-gray-900 hover:text-gray-700 transition-colors duration-300 cursor-pointer">
                        UX Driven Engineering
                    </h2>
                    <p class="text-sm text-gray-600 max-w-sm">
                        Unlike other companies, we are a UX first development company. Projects are driven by designers and they make sure design and experiences translate to code.
                    </p>
                </div>
            </div>
        </div>

        <div class="max-w-xl mx-auto bg-gray-200 p-6 rounded-lg">
            <div class="flex gap-6 items-start">
                <img src="https://th.bing.com/th/id/OIP.P3LAMQz4AleJ-uQFxW3m0AHaE8?w=261&h=180&c=7&r=0&o=5&pid=1.7" class="w-14 h-14 hover:opacity-80 transition-opacity duration-300 cursor-pointer">
                <div class="flex flex-col gap-2">
                    <h2 class="text-xl font-semibold text-gray-900 hover:text-gray-700 transition-colors duration-300 cursor-pointer">
                        UX Driven Engineering
                    </h2>
                    <p class="text-sm text-gray-600 max-w-sm">
                        Unlike other companies, we are a UX first development company. Projects are driven by designers and they make sure design and experiences translate to code.
                    </p>
                </div>
            </div>
        </div>
        <div class="max-w-xl mx-auto bg-gray-200 p-6 rounded-lg">
            <div class="flex gap-6 items-start">
                <img src="https://th.bing.com/th/id/OIP.P3LAMQz4AleJ-uQFxW3m0AHaE8?w=261&h=180&c=7&r=0&o=5&pid=1.7" class="w-14 h-14 hover:opacity-80 transition-opacity duration-300 cursor-pointer">
                <div class="flex flex-col gap-2">
                    <h2 class="text-xl font-semibold text-gray-900 hover:text-gray-700 transition-colors duration-300 cursor-pointer">
                        UX Driven Engineering
                    </h2>
                    <p class="text-sm text-gray-600 max-w-sm">
                        Unlike other companies, we are a UX first development company. Projects are driven by designers and they make sure design and experiences translate to code.
                    </p>
                </div>
            </div>
        </div>
        <div class="max-w-xl mx-auto bg-gray-200 p-6 rounded-lg">
            <div class="flex gap-6 items-start">
                <img src="https://th.bing.com/th/id/OIP.P3LAMQz4AleJ-uQFxW3m0AHaE8?w=261&h=180&c=7&r=0&o=5&pid=1.7" class="w-14 h-14 hover:opacity-80 transition-opacity duration-300 cursor-pointer">
                <div class="flex flex-col gap-2">
                    <h2 class="text-xl font-semibold text-gray-900 hover:text-gray-700 transition-colors duration-300 cursor-pointer">
                        UX Driven Engineering
                    </h2>
                    <p class="text-sm text-gray-600 max-w-sm">
                        Unlike other companies, we are a UX first development company. Projects are driven by designers and they make sure design and experiences translate to code.
                    </p>
                </div>
            </div>
        </div>
        <div class="max-w-xl mx-auto bg-gray-200 p-6 rounded-lg">
            <div class="flex gap-6 items-start">
                <img src="https://th.bing.com/th/id/OIP.P3LAMQz4AleJ-uQFxW3m0AHaE8?w=261&h=180&c=7&r=0&o=5&pid=1.7" class="w-14 h-14 hover:opacity-80 transition-opacity duration-300 cursor-pointer">
                <div class="flex flex-col gap-2">
                    <h2 class="text-xl font-semibold text-gray-900 hover:text-gray-700 transition-colors duration-300 cursor-pointer">
                        UX Driven Engineering
                    </h2>
                    <p class="text-sm text-gray-600 max-w-sm">
                        Unlike other companies, we are a UX first development company. Projects are driven by designers and they make sure design and experiences translate to code.
                    </p>
                </div>
            </div>
        </div>
        <div class="max-w-xl mx-auto bg-gray-200 p-6 rounded-lg">
            <div class="flex gap-6 items-start">
                <img src="https://th.bing.com/th/id/OIP.P3LAMQz4AleJ-uQFxW3m0AHaE8?w=261&h=180&c=7&r=0&o=5&pid=1.7" class="w-14 h-14 hover:opacity-80 transition-opacity duration-300 cursor-pointer">
                <div class="flex flex-col gap-2">
                    <h2 class="text-xl font-semibold text-gray-900 hover:text-gray-700 transition-colors duration-300 cursor-pointer">
                        UX Driven Engineering
                    </h2>
                    <p class="text-sm text-gray-600 max-w-sm">
                        Unlike other companies, we are a UX first development company. Projects are driven by designers and they make sure design and experiences translate to code.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="bg-white text-gray-800">

    <!-- Tech Stack Section -->
    <div class="text-center py-16">
        <h2 class="text-purple-600 text-2xl font-semibold mb-8">Our</h2>
        <h1 class="text-4xl font-bold mb-8">Tech Stack</h1>

        <div class="flex justify-center space-x-4 mb-12">
            <button
                class="button px-4 pb-2 font-medium border-b-4 text-transparent bg-gradient-to-r from-[#F76680] to-[#57007B] bg-clip-text  active"
                onclick="setActive(this)">
                Backend
            </button>
            <button class="button  text-gray-500 px-4 pb-2 font-medium" onclick="setActive(this)">
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
        <div class="flex flex-col items-center gap-8 py-10">
            <div class="flex flex-wrap justify-center gap-16">
                <div class="w-40 h-24 flex justify-center items-center transition-transform transform hover:scale-110 cursor-pointer">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z5yJ_4IayXWIU-R5/node-js.png" alt="NodeJS" class="max-w-full max-h-full object-contain">
                </div>
                <div class="w-40 h-24 flex justify-center items-center transition-transform transform hover:scale-110 cursor-pointer">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z5yJ_4IayXWIU-R5/php.png" alt="PHP" class="max-w-full max-h-full object-contain">
                </div>
                <div class="w-40 h-24 flex justify-center items-center transition-transform transform hover:scale-110 cursor-pointer">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z5yJ_4IayXWIU-R5/kisspng.png" alt="MySQL" class="max-w-full max-h-full object-contain">
                </div>
                <div class="w-40 h-24 flex justify-center items-center transition-transform transform hover:scale-110 cursor-pointer">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z5yJ_4IayXWIU-R5/java.png" alt="Java" class="max-w-full max-h-full object-contain">
                </div>
                <div class="w-40 h-24 flex justify-center items-center transition-transform transform hover:scale-110 cursor-pointer">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z5yJ_4IayXWIU-R5/net-core.png" alt="NET Core" class="max-w-full max-h-full object-contain">
                </div>
            </div>
            <div class="flex flex-wrap justify-center gap-6">
                <div class="w-40 h-24 flex justify-center items-center transition-transform transform hover:scale-110 cursor-pointer">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z5yJ_4IayXWIU-R5/python.png" alt="Python" class="max-w-full max-h-full object-contain">
                </div>
                <div class="w-40 h-24 flex justify-center items-center transition-transform transform hover:scale-110 cursor-pointer">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z5yJ_4IayXWIU-R5/ruby-on-ra.png" alt="Ruby on Rails" class="max-w-full max-h-full object-contain">
                </div>
                <div class="w-40 h-24 flex justify-center items-center transition-transform transform hover:scale-110 cursor-pointer">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z5yJ_4IayXWIU-R5/go.png" alt="Go" class="max-w-full max-h-full object-contain">
                </div>
                <div class="w-40 h-24 flex justify-center items-center transition-transform transform hover:scale-110 cursor-pointer">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z5yJ_4IayXWIU-R5/mon-1.png" alt="MongoDB" class="max-w-full max-h-full object-contain">
                </div>
            </div>
        </div>


    </div>




    <div class="flex items-center gap-2 justify-center flex-col bg-gray-100 py-16">
        <h2 class="text-2xl font-inter">How development </h2>
        <p class="text-2xl font-bold tracking-wide   border-b mb-2"> through Alcaline works</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">

            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-lg font-bold mb-2"> <span
                        class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                        #1
                    </span> Assemble the right team</h3>
                <p class="text-sm text-gray-600">We handle all aspects of vetting and choosing the right team for you.</p>
            </div>

            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-lg font-bold mb-2"> <span class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                        #2
                    </span> Sprint planning</h3>
                <p class="text-sm text-gray-600">Sprint roadmap is a collective effort to clarify tasks and ensure shared understanding.</p>
            </div>

            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-lg font-bold mb-2"> <span
                        class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                        #3
                    </span> Tech architecture</h3>
                <p class="text-sm text-gray-600">We break monolithic apps into microservices for faster development.</p>
            </div>

            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-lg font-bold mb-2"> <span
                        class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                        #4
                    </span> Standups & weekly demos</h3>
                <p class="text-sm text-gray-600">Regular standups and reviews ensure everyone stays on the same page.</p>
            </div>

            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-lg font-bold mb-2">
                    <span
                        class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                        #5
                    </span>Code reviews
                </h3>
                <p class="text-sm text-gray-600">Code reviews help detect memory leaks, performance issues, and bad smells.</p>
            </div>

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

    <!-- JavaScript for Carousel -->
    <script>
        const wrapper = document.querySelector('.flex.transition-transform');
        const dots = document.querySelectorAll('.dot');
        let currentIndex = 0;

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
            });
        });

        function updateCarousel() {
            const offset = currentIndex * -(333 + 20); // card width + gap
            wrapper.style.transform = `translateX(${offset}px)`;

            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }
    </script>
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


    @endsection
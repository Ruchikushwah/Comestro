@extends('layout')
@section('title')
About Us
@endsection
@section('meta')
<meta name="description" content="Learn more about Comestro Techlab Private Limited, a leading software development company specializing in innovative solutions and digital transformation.">
@endsection

@section('content')
<div class="w-full h-[350px] mt-16 relative overflow-hidden bg-[url('/com.jpg')] bg-cover bg-center px-[8%] flex items-center">
    <!-- Blur Overlay -->
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

    <!-- Content Section -->
    <div class="relative flex flex-col gap-5 max-w-2xl z-10">
        <h2 class="text-4xl font-bold text-white drop-shadow-lg tracking-wide">About Us</h2>
        <p class="text-lg text-white leading-relaxed drop-shadow-md tracking-wider">
            At <span class="font-semibold">Comestro Techlab Private Limited</span>, we empower businesses with
            <span class="font-medium">cutting-edge software solutions</span> designed to drive innovation and digital transformation.
            Our mission is to develop <span class="font-semibold">scalable, reliable, and secure</span> technology products that solve real-world
            challenges, enabling our clients to achieve their goals with confidence.
        </p>
    </div>
</div>

<div class="container mx-auto max-w-6xl px-6 py-12 font-sans">
    <div class="flex flex-col md:flex-row items-center gap-16">
        <!-- Image Section -->
        <div class="w-full md:w-[400px] flex justify-center">
            <img src="/co founder.jpg" alt="Co-Founder" class="max-w-full h-auto object-cover rounded-lg shadow-lg">
        </div>

        <!-- Text Section -->
        <div class="flex-1 space-y-6">
            <h2 class="text-3xl font-semibold text-gray-700">Innovating the Future of IT Solutions</h2>
            <p class="text-lg text-gray-700 leading-relaxed font-light">
                <span class="font-semibold text-gray-400"><span class="text-orange-500">Com</span><span class="text-blue-400">estro </span>Techlabs Pvt. Ltd.</span> is a technology-driven company dedicated to providing <span class="font-semibold text-gray-500">cutting-edge </span>IT solutions and training programs.
                With a focus on <span class="font-semibold text-gray-500">software development</span>, backend solutions, API integration, and IT consulting, we help businesses and individuals navigate the ever-evolving digital landscape.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed font-light">
                Our commitment to <span class="font-semibold text-gray-500">quality</span>, innovation, and efficiency ensures that we deliver solutions tailored to the unique needs of our clients. Whether it's developing scalable applications, optimizing digital workflows, or empowering professionals with industry-relevant training, Comestro remains at the forefront of technological advancements.
            </p>

            <!-- Company Tagline or Motto -->
            <div class="mt-6">
                <p class="text-xl text-gray-900 font-semibold">Building Smarter Solutions, Shaping Better Futures.</p>
            </div>
        </div>

    </div>
</div>
<!-- Scrolling Team Section -->
<section class="relative w-full bg-white py-10 overflow-hidden">
    <h2 class="text-3xl font-bold mb-6 text-center text-[#0071bc]">For Teams, By Teams</h2>
    <p class="text-lg text-gray-700 text-center leading-relaxed max-w-2xl mx-auto">
        Good software is a work of art, and good art takes time.
        Our teams spend years mastering their craft to deliver exceptional products.
    </p>

    <div class="overflow-hidden mt-10">
        <div id="team-slider" class="flex space-x-6 w-max animate-scroll hover:pause">
            @foreach ([
            ['name' => 'Prince kumar', 'role' => 'Full Stack Developer', 'image' => '/fullstackdeveloper.png', 'linkedin' => 'https://www.linkedin.com/in/prince-kumar-143a99174/overlay/photo/', 'github' => 'https://github.com/princekumar205086'],
            ['name' => 'Sarita', 'role' => 'Project Team Leader', 'image' => '/teamleader.png', 'linkedin' => 'https://www.linkedin.com/in/sarita-kumari-79abb3213/', 'github' => 'https://github.com/SaritaKumari24'],
            ['name' => 'Aarchana', 'role' => 'Frontend Developer (React)', 'image' => '\fontenddeveloper (1).png', 'linkedin' => 'https://www.linkedin.com/in/archana-kumari-39107824a/', 'github' => 'https://github.com/Archana-PC'],
            ['name' => 'Roni Saha', 'role' => 'Tester', 'image' => '/tester.png', 'linkedin' => 'https://www.linkedin.com/in/roni-saha/', 'github' => 'https://github.com/roni836'],
            ] as $member)
            <div class="relative bg-white rounded-lg overflow-hidden w-80 transition transform hover:scale-105 group">
                <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="w-full h-64 object-cover object-center">

                <div class="absolute inset-0 bg-gradient-to-t from-[#0071bcb5] via-gray-400 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out"></div>

                <div class="absolute left-4 flex flex-col top-1/3 transform -translate-y-1/2 space-y-2 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out">
                    <a href="{{ $member['linkedin'] }}" class="bg-white p-2 rounded-full hover:bg-blue-500 transition-all duration-300">
                        <i class="fab fa-linkedin text-blue-600 hover:text-white"></i>
                    </a>
                    <a href="{{ $member['github'] }}" class="bg-white p-2 rounded-full hover:bg-blue-400 transition-all duration-300">
                        <i class="fab fa-github text-blue-500"></i>
                    </a>
                </div>

                <div class="p-4 text-center relative z-10">
                    <span class="block text-lg font-medium text-gray-900">{{ $member['name'] }}</span>
                    <span class="block text-sm text-gray-600">{{ $member['role'] }}</span>
                </div>
            </div>
            @endforeach

            <!-- Duplicate for Infinite Scroll Effect -->
            @foreach ([
            ['name' => 'Prince kumar', 'role' => 'Full Stack Developer', 'image' => '/fullstackdeveloper.png', 'linkedin' => 'https://www.linkedin.com/in/prince-kumar-143a99174/overlay/photo/', 'github' => 'https://github.com/princekumar205086'],
            ['name' => 'Sarita', 'role' => 'Project Team Leader', 'image' => '/teamleader.png', 'linkedin' => 'https://www.linkedin.com/in/sarita-kumari-79abb3213/', 'github' => 'https://github.com/SaritaKumari24'],
            ['name' => 'Aarchana', 'role' => 'Frontend Developer (React)', 'image' => '/fontenddeveloper(1).png', 'linkedin' => 'https://www.linkedin.com/in/archana-kumari-39107824a/', 'github' => 'https://github.com/Archana-PC'],
            ['name' => 'Roni Saha', 'role' => 'Tester', 'image' => '/tester.png', 'linkedin' => 'https://www.linkedin.com/in/roni-saha/', 'github' => 'https://github.com/roni836'],
            ] as $member)
            <div class="relative bg-white rounded-lg overflow-hidden w-80 transition transform hover:scale-105 group">
                <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="w-full h-64 object-cover object-center">

                <div class="absolute inset-0 bg-gradient-to-t from-[#0071bcb5] via-gray-400 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out"></div>

                <div class="absolute left-4 flex flex-col top-1/3 transform -translate-y-1/2 space-y-2 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out">
                    <a href="{{ $member['linkedin'] }}" class="bg-white p-2 rounded-full hover:bg-blue-500 transition-all duration-300">
                        <i class="fab fa-linkedin text-blue-600 hover:text-white"></i>
                    </a>
                    <a href="{{ $member['github'] }}" class="bg-white p-2 rounded-full hover:bg-blue-400 transition-all duration-300">
                        <i class="fab fa-github text-blue-500"></i>
                    </a>
                </div>

                <div class="p-4 text-center relative z-10">
                    <span class="block text-lg font-medium text-gray-900">{{ $member['name'] }}</span>
                    <span class="block text-sm text-gray-600">{{ $member['role'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="bg-gray-100 py-12 px-6">
    <h2 class="text-4xl font-bold text-center text-gray-800 mb-10">
        <span class="text-blue-600">Achievements & Certifications</span>
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
        <!-- Certification 1 -->
        <div class="bg-white p-4 rounded-xl  hover:shadow-lg transition-all duration-300">
            <img src="path-to-certificate1.jpg" alt="Certification 1" class="w-full h-44 object-contain rounded-lg">
        </div>

        <!-- Certification 2 -->
        <div class="bg-white p-4 rounded-xl  hover:shadow-lg transition-all duration-300">
            <img src="path-to-certificate2.jpg" alt="Certification 2" class="w-full h-44 object-contain rounded-lg">
        </div>

        <!-- Certification 3 -->
        <div class="bg-white p-4 rounded-xl  hover:shadow-lg transition-all duration-300">
            <img src="path-to-certificate3.jpg" alt="Certification 3" class="w-full h-44 object-contain rounded-lg">
        </div>

        <!-- Certification 4 -->
        <div class="bg-white p-4 rounded-xl  hover:shadow-lg transition-all duration-300">
            <img src="path-to-certificate4.jpg" alt="Certification 4" class="w-full h-44 object-contain rounded-lg">
        </div>
    </div>
</div>


<div class="bg-white py-10 px-5 h-[250px]">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">
        Our <span class="text-blue-500">Clients</span>
    </h2>

    <div class="flex flex-wrap justify-center gap-10 max-w-7xl mx-auto">
        <!-- Client Logo 1 -->
        <!-- <img src="\learnSyntax.png" alt="Client 1" class="h-16  w- object-contain"> -->

        <!-- Client Logo 2 -->
        <img src="\logo.png" alt="Client 2" class="h-16 object-contain">

        <!-- Client Logo 3 -->
        <img src="\logo (2).png" alt="Client 3" class="h-16 object-contain">

        <!-- Client Logo 4 -->
        <img src="\image.jpeg" alt="Client 4" class="h-16 object-contain">

        <!-- Client Logo 5 -->
        <img src="\logo (1).png" alt="Client 5" class="h-16 object-contain">

        <!-- Client Logo 6 -->
        <img src="\image (3).png" alt="Client 6" class="h-16 object-contain">

        <!-- Client Logo 7 -->
        <img src="logo4.png" alt="Client 7" class="h-16 object-contain">


    </div>
</div>







<div class="flex flex-col lg:flex-row w-full items-center justify-between bg-[#2a5a7a] py-10 px-8 sm:px-12 rounded-lg mx-auto space-y-6 lg:space-y-0">
    <!-- Text Section -->
    <div class="text-center lg:text-left flex flex-col">
        <h2 class="text-2xl sm:text-3xl font-bold text-white">Get New Insights Weekly</h2>
        <p class="text-base sm:text-lg text-gray-200 mt-2 max-w-lg">
            Stay informed with fresh insights and trends delivered to your inbox. Subscribe now!
        </p>
    </div>

    <!-- Subscription Form -->
    <form class="flex flex-col sm:flex-row items-center w-full max-w-md gap-4">
        <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter your email">
        <a href="{{ route('contactus')}}" type="submit" class="bg-white px-6 py-3 font-semibold rounded-lg hover:border-[#2a5a7a] transition w-full sm:w-auto">
            Contact
            </a>
    </form>
</div>
<!-- Styles -->
<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Infinite Scroll Animation */
    @keyframes scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    .animate-scroll {
        display: flex;
        animation: scroll 20s linear infinite;
    }

    .animate-scroll:hover {
        animation-play-state: paused;
    }
</style>

@endsection
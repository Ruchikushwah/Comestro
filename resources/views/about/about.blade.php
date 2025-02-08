@extends('layout')

@section('title')
About us
@endsection
@section('content')
<div class="w-full h-[580px] mt-10 relative overflow-hidden bg-[url('/com.jpg')] bg-cover bg-center px-[8%] flex items-center">
    <!-- Blur Overlay -->
    <div class="absolute inset-0 bg-black/50 backdrop-blur-md"></div>

    <!-- Content Section -->
    <div class="relative flex flex-col gap-6 max-w-2xl z-10">
        <h2 class="text-4xl font-bold text-white drop-shadow-lg">About Us</h2>
        <p class="text-lg text-white leading-relaxed drop-shadow-md">
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
            <h2 class="text-3xl font-semibold text-gray-700">10 Years of Experience</h2>
            <p class="text-lg text-gray-700 leading-relaxed font-light">
                As a co-founder of <span class="font-semibold text-blue-600">Comestro Techlabs Pvt. Ltd.</span>, I bring over 10 years of expertise in IT services and training. Comestro was founded with a vision to bridge the gap between education and industry by providing high-quality IT solutions alongside professional training. Over the years, we have expanded our expertise in software development, backend solutions, and API integration, ensuring businesses and aspiring developers receive cutting-edge technology and guidance.
            </p>

            <!-- Signature Section -->
            <div class="mt-6 flex justify-between">
                <p class="text-xl text-gray-600 font-mono">Syed Sadique Hussain</p>
                <p class="text-gray-900 text-lg font-semibold">-Co-Founder</p>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-col items-center px-4 mt-20">
    <h2 class="text-3xl font-bold mb-6 text-center text-[#0071bc]">For Teams, By Teams</h2>
    <p class="text-lg text-gray-700 text-center leading-relaxed max-w-2xl mx-auto">
        Good software is a work of art, and good art takes time.
        Our teams spend years mastering their craft to deliver exceptional products.
    </p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 place-items-center mt-10">
        @foreach ([
        ['name' => 'Prince kumar', 'role' => 'Full Stack Developer', 'image' => '\fullstackdeveloper.png', 'linkedin' => 'https://www.linkedin.com/in/prince-kumar-143a99174/overlay/photo/', 'github' => 'https://github.com/princekumar205086'],
        ['name' => 'Sarita', 'role' => 'Project Team Leader', 'image' => '\teamleader.png', 'linkedin' => 'https://www.linkedin.com/in/sarita-kumari-79abb3213/', 'github' => 'https://github.com/SaritaKumari24'],
        ['name' => 'Aarchana', 'role' => 'Frontend Developer(React)', 'image' => '\fontenddeveloper (1).png', 'linkedin' => 'https://www.linkedin.com/in/archana-kumari-39107824a/', 'github' => 'https://github.com/Archana-PC'],
        ['name' => 'Roni Saha', 'role' => 'Tester', 'image' => '\tester.png', 'linkedin' => 'https://www.linkedin.com/in/roni-saha/', 'github' => 'https://github.com/roni836'],
        ] as $member)
        <div class="relative bg-white  rounded-lg overflow-hidden w-80 transition transform hover:scale-105 group">
            <!-- Image -->
            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="w-full h-64 object-cover object-center">

            <!-- Overlay Effect on Hover -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#0071bcb5] via-gray-400 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out"></div>

            <!-- Social Media Icons (Hidden by Default) -->
            <div class="absolute left-4 flex flex-col top-1/3 transform -translate-y-1/2 space-y-2 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out">
                <a href="{{ $member['linkedin'] }}" class="bg-white p-2 rounded-full  hover:bg-blue-500 transition-all duration-300">
                    <i class="fab fa-linkedin text-blue-600 hover:text-white"></i>
                </a>
                <a href="{{ $member['github'] }}" class="bg-white p-2 rounded-full  hover:bg-blue-400 transition-all duration-300">
                    <i class="fab fa-github text-blue-500"></i>
                </a>
            </div>

            <!-- Text Section -->
            <div class="p-4 text-center relative z-10">
                <span class="block text-lg font-medium text-gray-900">{{ $member['name'] }}</span>
                <span class="block text-sm text-gray-200">{{ $member['role'] }}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="flex flex-col items-center px-4 mt-20">
    <h2 class="text-3xl font-bold mb-4 text-center text-[#2a5a7a]">Our Office & Culture</h2>
    <p class="text-lg text-gray-700 text-center leading-relaxed max-w-2xl mx-auto">
        At Comestro, we believe in a work environment that fosters creativity, collaboration, and innovation.
        Our office is designed to inspire and support our team, providing a balance between productivity and fun.
    </p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-10">
        <img src="\WhatsApp Image 2025-02-06 at 09.33.19_47edf4d4.jpg" alt="Office Space" class="rounded-lg  w-full h-60 object-cover hover:scale-105 transition transform duration-300">
        <img src="\day.jpg" alt="Team Collaboration" class="rounded-lg  w-full h-60 object-cover hover:scale-105 transition transform duration-300">
        <img src="https://picsum.photos/402/300" alt="Work Environment" class="rounded-lg  w-full h-60 object-cover hover:scale-105 transition transform duration-300">
        <img src="https://picsum.photos/403/300" alt="Brainstorming Session" class="rounded-lg  w-full h-60 object-cover hover:scale-105 transition transform duration-300">
        <img src="https://picsum.photos/404/300" alt="Casual Workspace" class="rounded-lg  w-full h-60 object-cover hover:scale-105 transition transform duration-300">
        <img src="https://picsum.photos/405/300" alt="Team Lunch" class="rounded-lg  w-full h-60 object-cover hover:scale-105 transition transform duration-300">
        <img src="https://picsum.photos/404/300" alt="Casual Workspace" class="rounded-lg  w-full h-60 object-cover hover:scale-105 transition transform duration-300">
        <img src="https://picsum.photos/405/300" alt="Team Lunch" class="rounded-lg  w-full h-60 object-cover hover:scale-105 transition transform duration-300">
    </div>
    <div class="mt-10 text-center py-10">
        <h3 class="text-3xl font-semibold text-[#2a5a7a]">A Day at Comestro</h3>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto mt-4">
            At Comestro, every day is a journey of creativity and collaboration. From brainstorming sessions to solving real-world tech challenges, our team thrives in an environment that nurtures growth and innovation. We work hard, support each other, and celebrate every success together.
        </p>
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
        <button type="submit" class="bg-white px-6 py-3 font-semibold rounded-lg hover:border-[#2a5a7a] transition w-full sm:w-auto">
            Subscribe
        </button>
    </form>
</div>

@endsection
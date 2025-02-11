@extends('layout')
@section('title', 'Contact Us')

@section( 'meta')
<meta name="description" content="Contact Comestro Techlab Private Limited for expert software solutions, project ideas, and digital transformation support. Our team is ready to assist you!">
@endsection
@section('content')


<div class="w-full h-[350px] mt-16 relative overflow-hidden bg-[url('/com.jpg')] bg-cover bg-center px-6 md:px-[8%] flex items-center">

    <!-- Blur Overlay -->
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

    <!-- Content Section -->
    <div class="relative flex flex-col gap-4 md:gap-6 max-w-2xl z-10 text-center md:text-left">
        <h2 class="text-3xl md:text-4xl font-bold text-white drop-shadow-lg">Contact Us</h2>
        <p class="text-base md:text-lg text-white leading-relaxed drop-shadow-md tracking-wide">
            At <span class="font-semibold">Comestro Techlab Private Limited</span>, we’re here to assist you with all your technology needs. Whether you have a project idea, need expert consultation, or have any queries, our team is ready to help!<br>
            If you are looking for cutting-edge software solutions or need support with your digital transformation journey, don’t hesitate to reach out to us. Our dedicated team ensures that every inquiry is addressed promptly and professionally.
        </p>
    </div>
</div>


<div class="flex flex-col items-center px-4 mt-5 py-5">
    <h2 class="text-3xl font-bold text-[#0071bc] text-center">Let's Work Together</h2>
    <p class="text-lg text-gray-700 text-center mt-2 max-w-2xl">
        Need expert software solutions or have a project idea? Let's collaborate!
    </p>
    <!-- Display Success Message -->
    @if(session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded mt-4">
        {{ session('success') }}
    </div>
    @endif
    <!-- Contact Form -->
    <div class="rounded-lg p-6  w-full max-w-2xl">
        <form action="{{ route('send.message') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700 font-medium">Your Name</label>
                <input type="text" name="name" class="w-full p-3 border rounded-lg focus:outline-none hover:bg-slate-100" placeholder="Hello" required>
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Your Email</label>
                <input type="email" name="email" class="w-full p-3 border rounded-lg focus:outline-none hover:bg-slate-100" placeholder="abc@example.com" required>
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Message</label>
                <textarea name="message" class="w-full p-3 border rounded-lg focus:outline-none hover:bg-slate-100" rows="4" placeholder="How can we help you?" required></textarea>
            </div>

            <div class="g-recaptcha mt-8 flex justify-center" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
            <button type="submit" class="w-full bg-[#0071bc] text-white py-3 rounded-lg shadow-md hover:bg-[#005fa3] transition">
                Send Message
            </button>
        </form>
    </div>
    <!-- Social Media Links -->
    <!-- <div class="flex space-x-6 mt-6">
        <a href="#" class="text-[#0071bc] text-2xl hover:text-[#005fa3] transition"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-[#0071bc] text-2xl hover:text-[#005fa3] transition"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-[#0071bc] text-2xl hover:text-[#005fa3] transition"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="text-[#0071bc] text-2xl hover:text-[#005fa3] transition"><i class="fab fa-instagram"></i></a>
    </div> -->
</div>
<!-- Include Google reCAPTCHA Script -->
<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
@endsection
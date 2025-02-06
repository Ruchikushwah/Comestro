@extends('layout')
@section('content')

<div class="flex flex-col items-center px-4 mt-20 ">
    <h2 class="text-3xl font-bold text-[#0071bc] text-center">Let's Work Together</h2>
    <p class="text-lg text-gray-700 text-center mt-2 max-w-2xl">
        Need expert software solutions or have a project idea? Let's collaborate!
    </p>

    <!-- Contact Form -->
    <div class=" rounded-lg p-6  mt-4 w-full max-w-2xl">
        <form class="space-y-4">
            <div>
                <label class="block text-gray-700 font-medium">Your Name</label>
                <input type="text" class="w-full p-3 border rounded-lg focus:outline-none   hover:bg-slate-100" placeholder="Hello">
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Your Email</label>
                <input type="email" class="w-full p-3 border rounded-lg focus:outline-none hover:bg-slate-100" placeholder="abc@example.com">
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Message</label>
                <textarea class="w-full p-3 border rounded-lg focus:outline-none hover:bg-slate-100" rows="4" placeholder="How can we help you?"></textarea>
            </div>
            <button type="submit" class="w-full bg-[#0071bc] text-white py-3 rounded-lg shadow-md hover:bg-[#0071bc] transition">
                Send Message
            </button>
        </form>
    </div>

    <!-- Social Media Links -->
    <div class=" flex space-x-6">
        <a href="#" class="text-[#0071bc] text-2xl hover:text-[#0071bc] transition"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-[#0071bc] text-2xl hover:text-[#0071bc] transition"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-[#0071bc] text-2xl hover:text-[#0071bc] transition"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="text-[#0071bc] text-2xl hover:text-[#0071bc] transition"><i class="fab fa-instagram"></i></a>
           
    </div>
</div>

@endsection
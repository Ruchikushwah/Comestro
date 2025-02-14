@extends('layout')
@section('content')

<div class=" min-h-screen flex items-center justify-center p-4 bg-gray-100 mt-10">
    <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-sm overflow-hidden max-w-4xl w-full">
        <!-- Image Section -->
        <div class="md:w-1/2  flex  flex-col items-center">

            <img src="/4380747.jpg" alt="Sign Up" class="w-full h-full object-cover ">
        </div>

        <!-- Form Section -->
        <div class="md:w-1/2 p-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-6 text-center">Sign Up</h2>
            <form action="{{ route('auth.register.post') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg transition duration-300">
                    @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg  transition duration-300">
                    @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Contact Field -->
                <div>
                    <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                    <input type="number" id="contact" name="contact"
                        class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg  transition duration-300">
                    @error('contact')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="g-recaptcha mt-8 flex justify-center" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>

                <!-- Sign Up Button -->
                <button type="submit"
                    class="w-full px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">
                    Get Started
                </button>
                <p class="text-sm text-gray-600 mt-6"> Already have an account?
                    <a href="{{ route('login') }}" class="text-blue-500 font-semibold">Signin</a>
                </p>
            </form>
        </div>
    </div>
</div>


@endsection
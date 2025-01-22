@extends('layout')
@section('content')
<div class=" bg-gray-300 ">
    <div class="min-h-screen flex items-center justify-center m-4">
        <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg flex overflow-hidden">

            <div class="w-1/2 bg-gray-100 p-8">
                <h2 class="text-2xl font-bold text-gray-800">Finding your way around Comestro?</h2>
                <p class="text-gray-600 mt-4 font-inter">
                    At Comestro, we take pride in being more than a vendor. We are your trusted advisors, committed to delivering value and helping you thrive in a competitive landscape. Let us be your guide to innovation, efficiency, and growth. Together, we can achieve extraordinary results, transforming your business with solutions tailored just for you.
                </p>
                <div class="mt-8">
                    <img src="/teams.png" alt="">
                </div>
            </div>


            <div class="w-1/2 p-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Connect with us to start building your future.</h3>
                <form action="/submit" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Name*</label>
                        <input type="text" name="name" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Company Name*</label>
                        <input type="text" name="company_name" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email*</label>
                        <input type="email" name="email" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone Number*</label>
                        <input type="tel" name="phone" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">What software are you currently using?*</label>
                        <textarea name="software" rows="4" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tell us about your business*</label>
                        <textarea name="business" rows="2" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">What are you looking to achieve?*</label>
                        <textarea name="achieve" rows="2" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Are you currently transitioning from another provider, or is this your first time exploring a solution?*
                        </label>
                        <textarea name="transitioning" rows="2" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Enter the verification code*</label>
                        <input type="text" name="verification_code" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500">
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-purple-500 text-white py-2 rounded-lg ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
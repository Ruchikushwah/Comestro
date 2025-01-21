@extends('layout')
@section('content')
<div class="bg-slate-200 h-screen flex items-center justify-center">

    <div class="max-w-4xl bg-white rounded-lg shadow-lg flex ">

        <div class=" flex-col justify-center items-center bg-purple-100 text-white w-1/2 p-8">
            <img src="/software.png" class=" mt-12">
        </div>
        <div class="w-full md:w-1/2 p-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Sign Up Here...</h1>
            <form action="" method="POST" class=" gap-4 mt-4">
                @csrf
                <div>
                    <label for="name" class="">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Full name" class="w-full border font-inter  rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>
                <div>
                    <label for="email" class="">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="w-full border   rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>
                <div class="relative">
                    <label for="password" class="">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">

                </div>
                <button type="submit" class="w-full bg-purple-100   py-2 rounded-lg font-semibold mt-4">
                    Register
                </button>
            </form>


            <p class="text-gray-500 text-sm text-center mt-4">
                Already have an account? <a href="/auth/login" class="text-black font-medium">Log In</a>
            </p>

        </div>
    </div>

</div>
@endsection
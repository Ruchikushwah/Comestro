@extends('layout')
@section('content')
<div class="bg-slate-200 h-screen flex items-center justify-center">

    <div class="max-w-4xl bg-white rounded-lg shadow-lg flex ">

        <div class=" flex-col justify-center items-center bg-purple-100 text-white w-1/2 p-8">

            <img src="/software.png" class=" mt-12">

        </div>
        <div class="w-full md:w-1/2 p-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Sign In</h1>
            <form action="" method="POST" class=" gap-4 mt-2">
                @csrf

                <div>
                    <label for="email" class="">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="w-full border  rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>
                <div>
                    <label for="password" class="">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">

                </div>
                <button type="submit" class="w-full bg-purple-100   py-2 rounded-lg font-semibold mt-4">
                    Login
                </button>
            </form>



        </div>
    </div>

</div>
@endsection
@extends('layout')
@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100 p-4 mt-10">
    <div class="bg-white shadow-sm rounded-lg flex flex-col md:flex-row w-full max-w-4xl">
        <!-- Left Side - Sign In -->
        <div class="w-full md:w-1/2 p-6 md:px-8 md:py-8">
            <!--  <img src="/comestro.png" alt="Logo" class="h-10 mb-4"> -->
            <h2 class="text-2xl font-semibold">Sign in</h2>
            <!--<p class="text-gray-600 text-sm mb-6">to access CRM</p> -->

            <form method="POST" action="{{ route('auth.sendOtp') }}" class="space-y-4">
                @csrf
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email address "
                    class="w-full px-4 py-3 border rounded-lg">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                <button type="submit"
                    class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition">
                    Send OTP
                </button>
            </form>

            <div class="mt-6">
                <p class="text-gray-600 text-sm mb-2">Sign in using</p>
                <div class="flex space-x-3">
                    <button class="p-2 bg-gray-200 rounded"><img src="/google icon.png" class="h-6"></button>
                </div>
            </div>

            <p class="text-sm text-gray-600 mt-6">Don't have a Comestro account?
                <a href="{{ route('auth.register') }}" class="text-blue-500 font-semibold">Sign up now</a>
            </p>
        </div>

        <!-- Right Side - MFA Info -->
        <div class="w-full md:w-1/2 bg-gray-50 p-6 md:p-8 flex flex-col justify-center text-center">
            <img src="/signin.png" alt="MFA" class="mx-auto w-40 md:w-48">
            <h3 class="text-lg font-semibold mt-4">Empowering businesses with secure authentication.</h3>
            <p class="text-gray-600 text-sm mt-2">
                Enhance your security with OneAuth 2FA. Your accounts, your control.
            </p>
            <button class="mt-4 bg-blue-100 text-blue-600 px-4 py-2 rounded-full">
                Learn more
            </button>
        </div>
    </div>
</div>
@if(session('otp_sent'))
<div class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg  w-96">
        <h3 class="text-lg font-semibold mb-2">Enter OTP</h3>
        <p>An OTP has been sent to <strong>{{ session('email') }}</strong>. Please enter it below.</p>

        <form action="{{ route('auth.verify-otp') }}" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ session('email') }}">
            <input type="text" name="otp" class="border p-2 w-full rounded mt-2" required>

            <button type="submit" class="mt-2 bg-green-500 text-white px-4 py-2 rounded">
                Verify OTP
            </button>
        </form>

        <a href="{{ route('login') }}" class="mt-2 text-red-500 block text-center">Close</a>
    </div>
</div>
@endif
</div>

@endsection
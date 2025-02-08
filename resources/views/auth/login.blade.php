@extends('layout')
@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100 p-4 mt-10">
    <div class="bg-white shadow-sm rounded-lg flex flex-col md:flex-row w-full max-w-4xl">
        <!-- Left Side - Sign In -->
        <div class="w-full md:w-1/2 p-6 md:px-8 md:py-8">
            <img src="/comestro.png" alt="Logo" class="h-10 mb-4">
            <h2 class="text-2xl font-semibold">Sign in</h2>
            <p class="text-gray-600 text-sm mb-6">to access CRM</p>

            <form method="POST" action="{{ route('auth.sendOtp') }}" class="space-y-4">
                @csrf
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email address "
                    class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
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

<!-- OTP Modal -->
<div id="otp-modal" class="hidden fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 p-4">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-sm text-center">
        <img src="/comestro.png" alt="Logo" class="mx-auto mb-4 w-16 md:w-20">
        <h3 class="text-xl font-semibold text-gray-800">Enter OTP</h3>
        <p class="text-sm text-gray-600 mb-4">An OTP has been sent to your email. Please enter it below:</p>

        <form action="{{ route('auth.verify-otp') }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="email" id="otp_email_hidden" value="{{ session('email') }}">

            <div class="relative">
                <input type="text" name="otp" id="otp" required
                    class="bg-gray-200 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 border border-gray-300 rounded py-3 px-4 w-full text-center tracking-widest text-lg"
                    placeholder="● ● ● ● ● ●">
                @error('otp')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded hover:bg-blue-600">
                Verify
            </button>

            <p class="text-xs text-gray-500">You have not set a password for this account <a href="#" class="text-blue-500">Set password now.</a></p>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const otpModal = document.getElementById('otp-modal');
        const otpHiddenField = document.getElementById('otp_email_hidden');

        // Show OTP modal if session has otp_sent
        @if(session('otp_sent'))
        otpModal.classList.remove('hidden');
        otpHiddenField.value = "{{ session('email') }}";
        @endif
    });
</script>

@endsection
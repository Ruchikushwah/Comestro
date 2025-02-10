<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')| {{ env('APP_NAME') }} || Purnea's first IT software company, specializing in innovative web and software development solutions.</title>
    @yield('meta')


    @if (file_exists(public_path('build/assets/app-CECBcA4t.css')))
    <link rel="stylesheet" href="{{ asset('build/assets/app-CECBcA4t.css') }}">
    {{-- <script src="{{ asset('build/assets/app-Xaw6OIO1.js') }}" defer></script> --}}
    @else
    @vite('resources/css/app.css')
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    {!! htmlScriptTagJsApi() !!}
</head>
<body>
    <header>
        @include('header')
    </header>

    <main>
        @section('content')
        @show
    </main>
    @include('component.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @section('js')

    @show
</body>
</html>
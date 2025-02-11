<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <!-- OOPS! styled text -->
        <h1 class="text-8xl font-light text-black tracking-wider">
            <span class="inline-block">O</span>
            <span class="inline-block">O</span>
            <span class="inline-block">P</span>
            <span class="inline-block">S</span><span class="text-7xl">!</span>
        </h1>
        <!-- Subtext -->
        <p class="relative text-lg px-3 text-gray-600 tracking-wide bg-white -mt-5 w-[380px] self-center  ">404 - THE PAGE CAN'T BE FOUND</p>
        <!-- Button -->
        <a href="{{ url('/') }}"
            class="mt-6 inline-block px-6 py-3 text-white bg-orange-500 rounded shadow-md 
                  hover:bg-orange-600 transition duration-300 font-semibold uppercase">
            Go to Homepage
        </a>
    </div>
</body>

</html>
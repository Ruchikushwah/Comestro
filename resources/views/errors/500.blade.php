<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - Internal Server Error</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-red-600">500</h1>
        <p class="text-2xl text-gray-700 mt-4">Oops! Something went wrong on our end.</p>
        <p class="text-gray-600 mt-2">We are working to fix the issue. Please try again later.</p>
        <a href="{{ url('/') }}" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-md shadow hover:bg-blue-700 transition">
            Go Back Home
        </a>
    </div>
</body>
</html>

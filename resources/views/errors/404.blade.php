<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-gray-800">404</h1>
        <p class="text-xl text-gray-600 mt-2">Oops! Page Not Found</p>
        <p class="text-md text-gray-500 mt-4">The page you're looking for doesn't exist or has been moved.</p>
        <a href="{{ url('/') }}" class="mt-6 inline-block px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
            Go to Home
        </a>
    </div>
</body>
</html>

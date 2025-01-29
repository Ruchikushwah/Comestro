<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Stack Design</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-800">

    <!-- Tech Stack Section -->
    <section class="text-center py-16">
        <h2 class="text-purple-600 text-2xl font-semibold mb-8">Our</h2>
        <h1 class="text-4xl font-bold mb-8">Tech Stack</h1>

        <div class="flex justify-center space-x-4 mb-12">
            <button
                class="button px-4 pb-2 font-medium border-b-4 text-transparent bg-gradient-to-r from-[#F76680] to-[#57007B] bg-clip-text border-gradient-to-r from-[#943c4c] to-[#56007be7] active"
                onclick="setActive(this)">
                Backend
            </button>
            <button class="button text-gray-500 px-4 pb-2 font-medium" onclick="setActive(this)">
                Frontend
            </button>
            <button class="button text-gray-500 px-4 pb-2 font-medium" onclick="setActive(this)">
                Databases
            </button>
            <button class="button text-gray-500 px-4 pb-2 font-medium" onclick="setActive(this)">
                CMS
            </button>
            <button class="button text-gray-500 px-4 pb-2 font-medium" onclick="setActive(this)">
                CloudTesting
            </button>
            <button class="button text-gray-500 px-4 pb-2 font-medium" onclick="setActive(this)">
                DevOps
            </button>
        </div>

        <!-- Tech Stack Icons -->
        <div class="grid grid-cols-3 md:grid-cols-6 gap-8 items-center justify-center">
            <img src="nodejs-logo.svg" alt="Node.js" class="h-12">
            <img src="php-logo.svg" alt="PHP" class="h-12">
            <img src="mysql-logo.svg" alt="MySQL" class="h-12">
            <img src="java-logo.svg" alt="Java" class="h-12">
            <img src="python-logo.svg" alt="Python" class="h-12">
            <img src="rails-logo.svg" alt="Rails" class="h-12">
            <img src="golang-logo.svg" alt="GoLang" class="h-12">
            <img src="mongodb-logo.svg" alt="MongoDB" class="h-12">
            <img src="dotnet-logo.svg" alt=".NET" class="h-12">
        </div>

        <!-- JavaScript -->
        <script>
            function setActive(button) {
                // Remove the "active" class from all buttons
                document.querySelectorAll('.button').forEach((btn) => {
                    btn.classList.remove(
                        'text-transparent',
                        'bg-gradient-to-r',
                        'from-[#F76680]',
                        'to-[#57007B]',
                        'bg-clip-text',
                        'border-gradient-to-r',
                        'from-[#943c4c]',
                        'to-[#56007be7]'
                    );
                    btn.classList.add('text-gray-500'); // Reset text color
                });

                // Add the "active" class to the clicked button
                button.classList.remove('text-gray-500');
                button.classList.add(
                    'text-transparent',
                    'bg-gradient-to-r',
                    'from-[#F76680]',
                    'to-[#57007B]',
                    'bg-clip-text',
                    'border-gradient-to-r',
                    'from-[#943c4c]',
                    'to-[#56007be7]'
                );
            }
        </script>

    </section>

    <!-- Development Process Section -->
    <section class="bg-gray-100 py-16">
        <h2 class="text-purple-600 text-2xl font-semibold text-center mb-8">How development through Alcaline works</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Step 1 -->
            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-lg font-bold mb-2"> <span
                        class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                        #1
                    </span> Assemble the right team</h3>
                <p class="text-sm text-gray-600">We handle all aspects of vetting and choosing the right team for you.</p>
            </div>
            <!-- Step 2 -->
            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-lg font-bold mb-2"> <span
                        class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                        #2
                    </span> Sprint planning</h3>
                <p class="text-sm text-gray-600">Sprint roadmap is a collective effort to clarify tasks and ensure shared understanding.</p>
            </div>
            <!-- Step 3 -->
            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-lg font-bold mb-2"> <span
                        class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                        #3
                    </span> Tech architecture</h3>
                <p class="text-sm text-gray-600">We break monolithic apps into microservices for faster development.</p>
            </div>
            <!-- Step 4 -->
            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-lg font-bold mb-2"> <span
                        class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                        #4
                    </span> Standups & weekly demos</h3>
                <p class="text-sm text-gray-600">Regular standups and reviews ensure everyone stays on the same page.</p>
            </div>
            <!-- Step 5 -->
            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-lg font-bold mb-2">
                    <span
                        class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                        #5
                    </span>Code reviews
                </h3>
                <p class="text-sm text-gray-600">Code reviews help detect memory leaks, performance issues, and bad smells.</p>
            </div>
            <!-- Step 6 -->
            <div class="bg-white p-6 rounded ">
                <h3 class="text-lg font-bold mb-2">
                    <span
                        class="bg-gradient-to-r from-[#F76680] to-[#57007B] text-transparent bg-clip-text">
                        #6
                    </span>
                    Iterative delivery
                </h3>
                <p class="text-sm text-gray-600">
                    We divide the implementation process into smaller checkpoints.
                </p>
            </div>

        </div>
    </section>

</body>

</html>
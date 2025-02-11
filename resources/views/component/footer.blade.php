<footer class="bg-gray-200 text-gray-700">
    <div class="container mx-auto py-8 px-6">
        <!-- Footer Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-y-8 gap-x-6 text-center md:text-left">
            <!-- Logo -->
            <div class="flex justify-center md:justify-start flex-col text-center">
                <a href="" class="text-3xl font-semibold text-orange-500 ">Com<span class="text-blue-600">estro</span></a>
                <span class="text-sm  ">Techlabs .Pvt .Ltd</span>
            </div>

            <!-- Company Links -->
            <div class="flex flex-col gap-2 text-sm text-gray-900">
                <h3 class="font-semibold text-lg">Company</h3>
                <a href="{{ route('about')}}" class="hover:text-gray-500">About</a>
                <a href="#" class="hover:text-gray-500">Contact Us</a>
                <a href="{{ route('support.tickets.manage') }}" class="hover:text-gray-500">Support</a>
                <a href="#" class="hover:text-gray-500">Privacy Policy</a>
            </div>

            <!-- Contact Info -->
            <div class="text-sm text-gray-900">
                <h3 class="font-semibold text-lg">Contact</h3>
                <ul class="mt-4 space-y-2">
                    <li><span class="font-semibold">Phone:</span> <a href="#" class="hover:text-gray-500">(+91) 95-46-80-55-80</a></li>
                    <li><span class="font-semibold">Email:</span> <a href="#" class="hover:text-gray-500">info@comestro.com</a></li>
                </ul>
            </div>

            <!-- Social Links -->
            <div class="flex justify-center md:justify-start mt-5">
                <div class="flex space-x-4">
                    <a href="acebook.com/cwspurnea/" class="text-gray-600 hover:text-gray-400 text-2xl"><i class="fab fa-facebook"></i></a>
                    <a href="https://github.com/Comestro" class="text-gray-600 hover:text-gray-400 text-2xl"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/syedsadiquehussain/" class="text-gray-600 hover:text-gray-400 text-2xl"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/comestro_software_company" class="text-gray-600 hover:text-gray-400 text-2xl"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@CodewithsadiQ" class="text-gray-600 hover:text-gray-400 text-2xl"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center text-sm mt-5 bg-gray-700  text-white py-5">
        © 2025, <strong>{{ env('APP_NAME') }} Techlabs Pvt. Ltd.</strong> All Rights Reserved.
    </div>
</footer>
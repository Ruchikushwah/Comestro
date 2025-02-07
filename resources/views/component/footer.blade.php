<footer class="bg-gray-200 text-gray-700">
    <div class="container mx-auto py-8 px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center md:text-left">
            <!-- Logo -->
            <div class="flex justify-center md:justify-start">
                <img src="/comestro.png" alt="Comestro Logo" class="h-12">
            </div>
            <div class=" flex flex-col gap-2  text-sm space-x-4 text-gray-900">
                <h3 class="font-semibold text-lg">Company</h3>
                <a href="#" class="hover:text-gray-300">Home</a>
                <a href="#" class="hover:text-gray-300">Contact Us</a>
                <a href="#" class="hover:text-gray-300">Service</a>
                <a href="{{ route('support.tickets.manage') }}" class="hover:text-gray-300">Support</a>
                <a href="{{ route('crm.lead')}}" class="hover:text-gray-300">CRM</a>
                <a href="#" class="hover:text-gray-300">Privacy Policy</a>
            </div>

            <div>
                <h3 class="font-semibold text-lg">Contact</h3>
                <ul class="mt-4 space-y-2 text-sm">
                    <li><span class="font-semibold">Phone</span></li>
                    <li><a href="#" class="hover:text-gray-300">(+91) 9546805580</a></li>
                    <li><span class="font-semibold">Email</span></li>
                    <li><a href="#" class="hover:text-gray-300">info@comestro.com</a></li>
                </ul>
            </div>
            
            <!-- Social Links -->
            <div class="flex justify-center mt-6 space-x-6">
                <a href="#" class="text-gray-600 hover:text-gray-300 text-2xl"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-gray-600 hover:text-gray-300 text-2xl"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-gray-600 hover:text-gray-300 text-2xl"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="text-gray-600 hover:text-gray-300 text-2xl"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600 hover:text-gray-300 text-2xl"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <!-- Copyright -->
        <div class="mt-4 text-center text-sm bg-gray-800 py-5 text-white">
            © 2025, <strong>Comestro Techlabs Pvt. Ltd.</strong> All Rights Reserved.
        </div>
    </div>
</footer>
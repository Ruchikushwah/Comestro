@extends('layout')
@section('content')


<div class="w-full h-[500px] mt-10 relative overflow-hidden bg-gradient-to-r from-blue-900  to-purple-900 px-10 ">

    <div class="w-full h-[500px] flex items-center justify-between gap-10">
        <div class="flex w-[600px] flex-col gap-4">
            <h2 class="text-3xl font-semibold text-white">About Us</h2>
            <p class="text-lg md:text-xl text-white leading-relaxed">
                At Comestro Techlab Private Limited, we empower businesses with
                <span class="font-medium text-gray-100">cutting-edge software solutions</span> designed to drive innovation and digital transformation.
                Our mission is to develop <span class="font-semibold">scalable, reliable, and secure</span> technology products that solve real-world
                challenges, enabling our clients to achieve their goals with confidence.
            </p>

        </div>
        <div class=" flex  rounded-lg">
            <img src="\about.jpg" alt="" class="rounded-lg w-[400px]">
        </div>

    </div>

</div>

<!-- <div class="w-full h-[500px] mt-10 relative overflow-hidden bg-gradient-to-r from-blue-900  to-gray-800 ">
    <div class="container mx-auto px-6 lg:px-12 flex flex-col-reverse lg:flex-row items-center gap-12">
        <div class="lg:w-2/3 text-center lg:text-left space-y-6">
            <h2 class="text-xl md:text-4xl font-bold text-white leading-tight">
                About Us
            </h2>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                At Comestro Tech Lab Private Limited, we empower businesses with
                <span class="font-medium text-gray-900">cutting-edge software solutions</span> designed to drive innovation and digital transformation.
                Our mission is to develop <span class="font-semibold">scalable, reliable, and secure</span> technology products that solve real-world
                challenges, enabling our clients to achieve their goals with confidence.
            </p>
            <div class="flex justify-center lg:justify-start">
                <a href="#get-started" class="bg-indigo-800 text-white px-6 py-3 rounded-lg shadow-md hover:bg-indigo-700 transition">
                    Contact Us
                </a>
            </div>
        </div>

        <div class="lg:w-1/2 flex justify-center h-[400px] ">

        </div>
    </div>
</div> -->


<div class="flex flex-col items-center px-4 mt-20 ">
    <h2 class="text-3xl md:text-2xl font-bold mb-6 text-center text-indigo-800">
        For Teams, By Teams
    </h2>
    <p class="text-lg md:text-xl text-gray-700 text-center leading-relaxed max-w-2xl mx-auto">
        Good software is a work of art, and good art takes time.
        <br class="hidden md:block">
        Our teams spend years mastering their craft to deliver exceptional products.
    </p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 place-items-center mt-5">
        <div class="overflow-hidden bg-white w-80">
            <img src="https://picsum.photos/330/200/" alt="Team Member" class="w-full h-64 ">
            <div class="p-4 text-center text-lg font-medium">
                <span>Syed Sadique Hussain</span>
                <span class="block text-sm text-gray-500">Chief Executive Officer</span>
            </div>
        </div>
        <div class="overflow-hidden bg-white w-80">
            <img src="https://picsum.photos/320/200/" alt="Team Member" class="w-full h-64 ">
            <div class="p-4 text-center text-lg font-medium">
                <span>Sarita</span>
                <span class="block text-sm text-gray-500">Lead Developer</span>
            </div>
        </div>
        <div class="overflow-hidden bg-white w-80">
            <img src="https://picsum.photos/340/200/" alt="Team Member" class="w-full h-64 ">
            <div class="p-4 text-center text-lg font-medium">
                <span>Aarchana</span>
                <span class="block text-sm text-gray-500">Product Manager</span>
            </div>
        </div>
        <div class="overflow-hidden bg-white w-80">
            <img src="https://picsum.photos/310/200/" alt="Team Member" class="w-full h-64">
            <div class="p-4 text-center text-lg font-medium">
                <span>Roni</span>
                <span class="block text-sm text-gray-500">Teaster</span>
            </div>
        </div>
    </div>

</div>

<div class="py-10"></div>

@endsection
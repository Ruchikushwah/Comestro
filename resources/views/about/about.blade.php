@extends('layout')
@section('title')
    About 
@endsection
@section('content')
<div class="flex px-10">
    <div class="grid grid-cols-5 p-6 mt-20">
        <h1 class=" font-semobold text-2xl mt-6">
            At Comestro Tech Lab Private Limited Solutions,we strive<br>
            to empower businesses with cutting-edge software solutions <br>
            designed to drive innovation and digital transformation.<br>
            Our mission is to create scalable, reliable, and secure technology<br>
            products that solve real-world problems and enable our clients to<br>
            achieve their goals with confidence
        </h1>
    </div>
    <div class="grid grid-cols-7">
        <img src="/software.png" alt="Software Solutions" class="w-full">
    </div>
</div>

<div class="text-center mt-20">
    <h1 class="text-2xl mt-5">Good software is a work of art, and good art takes time. Our teams spend years <br>
         mastering their craft in order to deliver exceptional products that customers love. <br>
        Software isn't just our paycheck:</h1>
</div>
<div class="">
    <div class="flex flex-col lg:flex-row p-8 items-center justify-center min-h-screen">
        <div class="flex w-full lg:px-10">
            <div class="lg:w-2/3 lg:pl-12 p-8 rounded">
                <h1 class="mb-6 font-bold text-2xl lg:text-3xl flex flex-col lg:flex-row items-center">
                    Syed Sadique Hussain
                    <a href="#" class="text-blue-600 ml-2">Chief Executive Officer - Comestro Solutions</a>
                </h1>
                <p class="font-semibold text-lg text-gray-700">
                    At Comestro Tech Lab Private Limmited Solutions, we strive to empower businesses with cutting-edge software solutions designed to drive 
                    innovation and digital transformation. Our mission is to create scalable, reliable, and secure technology 
                    products that solve real-world problems and enable our clients to achieve their goals with confidence.
                </p>
                <p class="font-semibold text-lg text-gray-700 mt-4">
                    We believe in fostering a culture of collaboration and continuous learning, encouraging our team to explore 
                    new ideas and technologies fearlessly. By integrating innovation with customer-centric values, we aim to deliver 
                    exceptional experiences and make technology more accessible for everyone.
                </p>
            </div>
        </div>
        <h2 class="text-4xl font-semibold text-center mb-8">Meet Our Team</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-[10%] mt-10">
            <div class="overflow-hidden rounded-2xl shadow-lg bg-white">
                <img src="https://picsum.photos/330/200/" alt="Team Member" class="w-full h-64 object-cover rounded-t-2xl">
                <div class="p-4 text-center text-lg font-medium">
                    <span>Syed Sadique Hussain</span>
                    <span class="block text-sm text-gray-500">Chief Executive Officer</span>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl shadow-lg bg-white">
                <img src="https://picsum.photos/320/200/" alt="Team Member" class="w-full h-64 object-cover rounded-t-2xl">
                <div class="p-4 text-center text-lg font-medium">
                    <span>Syed Sadique Hussain</span>
                    <span class="block text-sm text-gray-500">Chief Executive Officer,</span>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl shadow-lg bg-white">
                <img src="https://picsum.photos/340/200/" alt="Team Member" class="w-full h-64 object-cover rounded-t-2xl">
                <div class="p-4 text-center text-lg font-medium">
                    <span>Syed Sadique Hussain</span>
                    <span class="block text-sm text-gray-500">Chief Executive Officer</span>
                </div>
            </div>
        </div> 
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-[10%] mt-10">
            <div class="overflow-hidden rounded-2xl shadow-lg bg-white">
                <img src="https://picsum.photos/330/200/" alt="Team Member" class="w-full h-64 object-cover rounded-t-2xl">
                <div class="p-4 text-center text-lg font-medium">
                    <span>Syed Sadique Hussain</span>
                    <span class="block text-sm text-gray-500">Chief Executive Officer</span>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl shadow-lg bg-white">
                <img src="https://picsum.photos/320/200/" alt="Team Member" class="w-full h-64 object-cover rounded-t-2xl">
                <div class="p-4 text-center text-lg font-medium">
                    <span>Syed Sadique Hussain</span>
                    <span class="block text-sm text-gray-500">Chief Executive Officer,</span>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl shadow-lg bg-white">
                <img src="https://picsum.photos/340/200/" alt="Team Member" class="w-full h-64 object-cover rounded-t-2xl">
                <div class="p-4 text-center text-lg font-medium">
                    <span>Syed Sadique Hussain</span>
                    <span class="block text-sm text-gray-500">Chief Executive Officer</span>
                </div>
            </div>
        </div> 
    </div>   
</div>
@endsection
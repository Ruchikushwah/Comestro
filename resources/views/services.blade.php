 @extends('layout')
 @section('content')

 <div class="w-full h-[400px] mt-10 relative overflow-hidden bg-gradient-to-r from-blue-900  to-purple-600">

     <div class="absolute top-[-130px] left-[-130px] rounded-full bg-blue-600 w-[300px] h-[300px] flex items-center justify-center text-white">

     </div>
     <div class="flex items-center justify-center py-20 ">
         <h2 class="text-3xl font-semibold text-white text-center">app development refers to <br> the process of creating,</h2>
     </div>
 </div>

 <div class="flex justify-center items-center  bg-gray-50 font-inter ">
     <div class="max-w-xl text-left">

         <p class="text-lg text-gray-900 mb-4  ">
             Web development refers to the process of creating, building, and maintaining websites and web applications that are accessible via the internet or an intranet. It involves a combination of technical, creative, and problem-solving skills to create functional, interactive, and user-friendly websites.
         </p>

         <p class="text-lg font-medium text-gray-900 mb-2">Types of Web Development</p>
         <ul class="list-disc list-inside text-purple-500 space-y-1">
             <li class="hover:underline">Frontend Development (Client-Side)</li>
             <li class="hover:underline">Backend Development (Server-Side)</li>
             <li class="hover:underline">Full-Stack Development</li>
         </ul>
     </div>
 </div>
 <div class="flex flex-col md:flex-row items-center md:items-start gap-8 py-10 px-20 bg-gray-100">
     <!-- Left Side Image -->
     <div class="md:w-1/2">
         <img src="\appdevelopment.avif" alt="App Development" class="w-full rounded-lg ">
     </div>

     <!-- Right Side Description -->
     <div class="md:w-1/2 text-gray-800">
         <h2 class="text-2xl font-bold text-gray-900">Overview</h2>
         <h3 class="text-xl font-semibold mt-2 text-gray-700">
             Empowering Businesses with Innovative App Development Solutions
         </h3>
         <p class="mt-4 text-gray-600 leading-relaxed">
             We specialize in delivering tailor-made app development services that align with your business goals and enhance user engagement. Whether it's a feature-rich mobile app or a dynamic web application, our app development process focuses on innovation, functionality, and seamless user experiences.
         </p>
         <p class="mt-4 text-gray-600 leading-relaxed">
             We ensure every app is optimized for performance across devices and platforms. Whether you're a startup looking for a fast launch or an enterprise seeking to enhance digital capabilities, we are your trusted partner in building apps that deliver value and impact in a competitive market.
         </p>
     </div>
 </div>




 @endsection
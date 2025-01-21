 @extends('layout')
 @section('content')
 <div class=" h-[300px] w-full bg-purple-200 ">
    <div class=" flex flex-1 items-center justify-between px-20"> 
        <div class=" flex">
            <img src="/software.png" class=" h-[300px] w-[300px] " alt="">
            
        </div>
        <div class=" ">
            <p >Web Development</p>
        </div>

    </div>

 </div>
 <div class="flex justify-center items-center min-h-screen bg-gray-50 font-inter ">
     <div class="max-w-2xl text-left">
        
         <p class="text-lg text-gray-900 mb-4  ">
             Web development refers to the process of creating, building, and maintaining websites and web applications that are accessible via the internet or an intranet. It involves a combination of technical, creative, and problem-solving skills to create functional, interactive, and user-friendly websites.
         </p>
         <p class="text-lg text-gray-900  mb-4">
             Web development can range from creating a simple static webpage to developing complex web applications, e-commerce platforms, social media sites, and more. It typically includes three key areas: frontend development, backend development, and full-stack development.
         </p>
         <p class="text-lg text-gray-900  mb-4">
             Frontend development focuses on the user interface and user experience of a website. It involves using HTML, CSS, and JavaScript to create the visual elements, layout, and interactivity of a website that users interact with in their web browsers.
         </p>


         <p class="text-lg font-medium text-gray-900 mb-2">Types of Web Development</p>
         <ul class="list-disc list-inside text-purple-500 space-y-1">
             <li class="hover:underline">Frontend Development (Client-Side)</li>
             <li class="hover:underline">Backend Development (Server-Side)</li>
             <li class="hover:underline">Full-Stack Development</li>

         </ul>


     </div>
 </div>



 @endsection
<x-layouts.app title="Dashboard">
    <div class="container mx-auto m-2 p-4 ">
        <!-- <div class="bg-white p-4 shadow rounded-lg">
            <h3 class="text-lg font-semibold mb-2">Manage Users</h3>

            @if (session()->has('message'))
            <p class="text-green-500">{{ session('message') }}</p>
            @endif

            <table class="w-full border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border px-4 py-2">Name</th>
                        <th class="border px-4 py-2">Email</th>
                        <th class="border px-4 py-2">Role</th>
                        <th class="border px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">{{ $user->role }}</td>
                        
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div> -->


        <!-- Welcome Section -->
        <div class="flex items-center mb-6">
            <div class="bg-gray-200 rounded-full w-12 h-12 flex items-center justify-center">
                <!-- Icon -->
                <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 10v11h18V10l-9-7-9 7Zm9-4.436 7 5.44V19H5v-7.996l7-5.44ZM12 15c1.103 0 2-.897 2-2s-.897-2-2-2-2 .897-2 2 .897 2 2 2Z" />
                </svg>
            </div>
            <h1 class="text-xl font-semibold text-gray-800 ml-4">Welcome,Admin Dashboard</h1>
        </div>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <!-- My Open Deals Card -->
            <div class="bg-blue-100 shadow-md rounded-lg p-8 text-center">
                <h2 class="text-gray-500 text-sm">My Open Deals</h2>
                <p class="text-2xl font-bold text-gray-800"></p>
            </div>

            <!-- My Untouched Card -->
            <div class="bg-blue-100 shadow-md rounded-lg p-8 text-center">
                <h2 class="text-gray-500 text-sm">My Untouched...</h2>
                <p class="text-2xl font-bold text-gray-800">2</p>
            </div>

            <!-- My Calls Today Card -->
            <div class="bg-blue-100 shadow-md rounded-lg p-8 text-center">
                <h2 class="text-gray-500 text-sm">My Calls Today</h2>
                <p class="text-2xl font-bold text-gray-800">1</p>
            </div>

            <!-- My Leads Card -->
            <div class="bg-blue-100 shadow-md rounded-lg p-8 text-center">
                <h2 class="text-gray-500 text-sm">My Leads</h2>
                <p class="text-2xl font-bold text-gray-800"></p>

            </div>
        </div>
        <div class="w-[300px] h-200px] gap-4 mt-10  border border-slate-200">
            <div class="bg-white p-5 flex justify-between">
                <h2 class="text-lg font-semibold">Today's Leads</h2>
                <p class="text-2xl font-bold ">{{ $todayLeadsCount }}</p>
            </div>

        </div>
    </div>




</x-layouts.app>
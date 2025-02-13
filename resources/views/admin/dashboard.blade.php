<x-layouts.app title="Dashboard">
    <div class="container mx-auto m-2 p-4">
        <!-- Welcome Section -->
        <div class="flex items-center mb-6">
            <div class="bg-gray-200 rounded-full w-12 h-12 flex items-center justify-center">
                <!-- Icon -->
                <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 10v11h18V10l-9-7-9 7Zm9-4.436 7 5.44V19H5v-7.996l7-5.44ZM12 15c1.103 0 2-.897 2-2s-.897-2-2-2-2 .897-2 2 .897 2 2 2Z" />
                </svg>
            </div>
            <h1 class="text-xl font-semibold text-gray-800 ml-4">Welcome, Admin Dashboard</h1>
        </div>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-blue-100 shadow-md rounded-lg p-8 text-center">
                <h2 class="text-gray-500 text-sm">My Open Deals</h2>
                <p class="text-2xl font-bold text-gray-800"></p>
            </div>
            <div class="bg-blue-100 shadow-md rounded-lg p-8 text-center">
                <h2 class="text-gray-500 text-sm">My Untouched...</h2>
                <p class="text-2xl font-bold text-gray-800">2</p>
            </div>
            <div class="bg-blue-100 shadow-md rounded-lg p-8 text-center">
                <h2 class="text-gray-500 text-sm">My Calls Today</h2>
                <p class="text-2xl font-bold text-gray-800">1</p>
            </div>
            <div class="bg-blue-100 shadow-md rounded-lg p-8 text-center">
                <h2 class="text-gray-500 text-sm">My Leads</h2>
                <p class="text-2xl font-bold text-gray-800"></p>
            </div>
        </div>

        <!-- Today's Leads -->
        <div class="w-[300px] h-200px] gap-4 mt-10 border border-slate-200">
            <div class="bg-white p-5 flex justify-between">
                <h2 class="text-lg font-semibold">Today's Leads</h2>
                <p class="text-2xl font-bold">{{ $todayLeadsCount }}</p>
            </div>
        </div>

        <!-- Manage Users Section -->
        <div class="bg-white p-4 shadow rounded-lg mt-6">
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
                        <th class="border px-4 py-2">CRM Access</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">
                            @if ($user->role)
                            <span class="font-semibold {{ $user->role->name === 'admin' ? 'text-red-500' : 'text-gray-600' }}">
                                {{ ucfirst($user->role->name) }}
                            </span>
                            @else
                            <span class="text-gray-500">No Role</span>
                            @endif
                        </td>

                        <td class="border px-4 py-2 text-center">
                            @can('grant-crm-access')
                            <form action="{{ route('admin.grant.crm', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="px-4 py-2 {{ $user->can_access_crm ? 'bg-green-500' : 'bg-red-500' }} text-white rounded">
                                    {{ $user->can_access_crm ? 'Revoke CRM Access' : 'Grant CRM Access' }}
                                </button>
                            </form>
                            @else
                            <span class="text-gray-500">Permission Denied</span>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
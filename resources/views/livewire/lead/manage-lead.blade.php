<div class="w-full">
    <div class="flex justify-between mb-4">
        <input
            type="text"
            placeholder="Search..."
            class="border px-4 py-2 rounded"
            wire:model.debounce.500ms="search" />
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
        <table class="w-full text-sm text-left text-gray-700 bg-white">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Lead Owner
                    </th>
                    <th scope="col" class="px-6 py-3">
                        First Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Lead Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($leads as $lead)
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    <td class="px-6 py-4">
                        {{ $lead->lead_owner }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $lead->first_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $lead->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $lead->phone }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $lead->lead_status }}
                    </td>
                    <td class="px-6 py-4 gap-4">
                        <a href="{{ route('create-lead.edit', $lead->id) }}" wire:navigate class="font-medium text-slate-600 hover:underline">Edit</a>
                      
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="border px-4 py-2 text-center">No Leads Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $leads->links() }}
    </div>
</div>
<div class=" w-full">
    <div class="flex justify-between mb-4">
        <input
            type="text"
            placeholder="Search..."
            class="border px-4 py-2 rounded" />
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">ticket number</th>
                    <th scope="col" class="px-6 py-3">username</th>
                    <th scope="col" class="px-6 py-3">subject</th>
                    <th scope="col" class="px-6 py-3">description</th>
                    <th scope="col" class="px-6 py-3">status</th>
                    <th scope="col" class="px-6 py-3">raised on</th>
                    <th scope="col" class="px-6 py-3">action</th>
                    
                </tr>
            </thead>
            <tbody>
                @forelse ($tickets as $ticket)
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $ticket->ticket_number }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $ticket->user->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $ticket->problemCategory->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $ticket->description }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $ticket->status }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $ticket->formatted_created_at }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('create-contact.edit', $ticket->id)}}" wire:navigate class="font-medium text-slate-100 bg-yellow-500 px-2 py-1 rounded">View</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="border px-4 py-2 text-center">No Tickets Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>